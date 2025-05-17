<x-layout>
    <form action="" method="">
        @csrf

        <h2>Create a New Ninja</h2>

        {{-- Ninja Name --}}
        <label for="name">Ninja Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            required
        >

        {{-- Ninja Strength --}}
        <label for="skill">Ninja Skill (0-100):</label>
        <input
            type="number"
            id="skill"
            name="skill"
            required
        >

        {{-- Ninja Bio --}}
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio"
            name="bio"
            required
        ></textarea>

        {{-- Select a Dojo --}}
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
            <option value="" disabled selected>Select a Dojo</option>
            @foreach($dojos as $dojo)
                <option value="{{ $dojo->id }}">
                    {{ $dojo->name }}
                </option>
            @endforeach
        </select>

        {{-- Submit button --}}
        <button type="submit" class="btn mt-4">Create Ninja</button>

        {{-- Validation errors --}}
    </form>
</x-layout>