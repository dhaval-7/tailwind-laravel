@extends('layouts.app')
@section('main')
{{-- <div class="container mx-auto mt-8"> --}}
    <div class="flex items-center justify-center h-screen mx-auto mt-8">
        <form action="#" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
            <h3>Test Form</h3>
        <!-- File upload input -->
        <div class="mb-4">
            <label for="file_upload" class="block text-gray-700 text-sm font-bold mb-2">File Upload</label>
            <input type="file" id="file_upload" name="file_upload" class="w-full">
        </div>

        <!-- Submit button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none hover:bg-blue-600">Submit</button>
        </div>
    </form>
</div>

<script>
    function uploadFile() {
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];

        if (!file) {
            alert('Please select a file');
            return;
        }

        const formData = new FormData();
        formData.append('file', file);

        fetch('https://your-api-endpoint.com/upload', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log('File uploaded successfully:', data);
            // Handle the response from the server
        })
        .catch(error => {
            console.error('Error uploading file:', error);
            // Handle errors
        });
    }
</script>
@endsection