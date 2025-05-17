<x-layout>
    <form action="{{ route('ninjas.store') }}" method="POST">
        @csrf

        <h2>Create a New Ninja</h2>

        {{-- Validation errors --}}
        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{-- Ninja Name --}}
        <label for="name">Ninja Name:</label>
        <input class="bg-white"
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >

        {{-- Ninja Strength --}}
        <label for="skill">Ninja Skill (0-100):</label>
        <input class="bg-white"
            type="number"
            id="skill"
            name="skill"
            value="{{ old('skill') }}"
            required
        >

        {{-- Ninja Bio --}}
        <label for="bio">Biography:</label>
        <textarea class="bg-white"
            rows="5"
            id="bio"
            name="bio"
            required
        >{{ old('bio') }}</textarea>

        {{-- Select a Dojo --}}
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" class="bg-white" required>
            <option value="" disabled selected>Select a Dojo</option>
            @foreach($dojos as $dojo)
                <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
                    {{ $dojo->name }}
                </option>
            @endforeach
        </select>

        {{-- Submit button --}}
        <button type="submit" class="btn mt-4">Create Ninja</button>
    </form>
</x-layout>