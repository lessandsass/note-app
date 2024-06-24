<x-layout>

    <div class="note-container single-note">
        <h1 class="text-3xl my-3 text-blue">Create new note</h1>

        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" id="note" class="note-body" rows="10" placeholder="Enter your text here..."></textarea>

            @error('note')
                <span class="text-red">{{ $message }}</span>
            @enderror

            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>

    </div>

</x-layout>
