<x-app-layout>

    <div class="note-container single-note">
        <h1 class="text-3xl my-3">Edit your note</h1>

        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" id="note" class="note-body" rows="10" placeholder="Enter your text here...">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Update</button>
            </div>
        </form>

    </div>

</x-app-layout>
