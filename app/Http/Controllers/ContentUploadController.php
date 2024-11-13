<?php

namespace App\Http\Controllers;

use App\Models\ContentDownload;
use App\Models\ContentUpload;
use App\Models\ContentViews;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contentHome()
    {
        $contents = ContentUpload::orderBy('id', direction: 'desc')->paginate(6);
        return view('contentHome', compact('contents'));
    }

    public function index()
    {
        $contents = ContentUpload::orderBy('id', 'desc')->paginate(6);
        return view('content-uploads.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content-uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content_type' => 'required|in:research_paper,creative_work',
            'file_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Initialize file path variable
        $filePath = null;

        // Check if the file was uploaded
        if ($request->hasFile('file_path')) {
            // Store the file and get its path
            $filePath = $request->file('file_path')->store('uploads', 'public');
        } else {
            // Optionally handle the case where the file is not uploaded
            return redirect()->back()->withErrors(['file_path' => 'File upload failed.']);
        }

        // Create a new ContentUpload instance
        $contentUpload = new ContentUpload();
        $contentUpload->title = $validated['title'];
        $contentUpload->description = $validated['description'];
        $contentUpload->content_type = $validated['content_type'];
        $contentUpload->file_path = $filePath; // Path is stored relative to 'storage/app/public/'
        $contentUpload->user_id = Auth::id(); // More concise way to get the authenticated user ID
        $contentUpload->save();

        // Redirect back with a success message
        return redirect()->route('content-uploads.index')->with('success', 'Content uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $contentUpload)
    {
        $content = ContentUpload::findorfail($contentUpload);
        $feedbacks = Feedback::where('content_upload_id', $contentUpload)->get();

       $views = ContentViews::firstOrCreate([
            'content_upload_id' => $content->id,
            'user_id' => Auth::id(), // Get the authenticated user's ID
        ]);

        return view('content-uploads.show', compact('content', 'feedbacks'));
    }
    public function download($id)
    {
        // Find the content upload by ID
        $contentUpload = ContentUpload::findOrFail($id);

        $filePath = public_path('storage/'.$contentUpload->file_path);
        \Log::info('File path: ' . $filePath);

        // Check if the file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        // Record the download
        ContentDownload::create([
            'content_upload_id' => $contentUpload->id,
            'user_id' => Auth::id(),
        ]);

        // Flash a success message to the session
        session()->flash('success', 'Successfully Downloaded');

        // Return the file for download
//        return response()->download(public_path($contentUpload->file_path));
        return response()->download($filePath);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContentUpload $contentUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentUpload $contentUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentUpload $contentUpload)
    {
        //
    }
}
