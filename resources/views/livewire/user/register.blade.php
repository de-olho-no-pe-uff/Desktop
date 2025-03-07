<div class=" flex min-h-screen flex-col justify-center items-center  bg-blue-500">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-md">

        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-4">REGISTER</h2>
        <form wire:submit.prevent="register">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" wire:model="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-white"
                    placeholder="Digite seu email">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Senha</label>
                <input type="password" id="password" wire:model="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-white"
                    placeholder="Digite sua senha">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" wire:model="remember" class="text-gray-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Esqueceu a senha?</a>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Entrar</button>
        </form>

    </div>
</div>
