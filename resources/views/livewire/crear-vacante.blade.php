<form class="md:w-1/2">
    <div>
        <x-input-label for="email" :value="__('Email')" />

        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

    </div>
</form>
