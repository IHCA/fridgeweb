<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Fridges') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($userFridges as $fridge)
                <div class="py-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                        <p style="margin-bottom: 10px;"><strong>Name:</strong> {{ $fridge->name }}</p>
                            <p style="margin-bottom: 10px;"><strong>City/County:</strong> {{ $fridge->city }}</p>
                            <p style="margin-bottom: 10px;"><strong>District:</strong> {{ $fridge->dist }}</p>
                            <p style="margin-bottom: 10px;"><strong>Address:</strong> {{ $fridge->address }}</p>
                            <p style="margin-bottom: 10px;"><strong>Company:</strong> {{ $fridge->company }}</p>
                            <p style="margin-bottom: 10px;"><strong>Telephone:</strong> {{ $fridge->telephone }}</p>
                            <p style="margin-bottom: 10px;"><strong>Email:</strong> {{ $fridge->email }}</p>

                            <!-- Edit and Delete buttons with increased spacing -->
                            <div class="flex items-center">
                                <!-- Show Content button -->
                                <a href="/show/content/{{ $fridge->id }}" class="btn btn-primary" style="background-color: black; color: white; border-radius: 10px; padding: 6px 12px; font-size: 16px; margin-right: 20px;">內容</a>
                                
                                <!-- Edit button -->
                                <a href="/show/edit/{{ $fridge->id }}" class="btn btn-primary" style="background-color: black; color: white; border-radius: 10px; padding: 6px 12px; font-size: 16px; margin-right: 20px;">編輯</a>

                                <!-- Delete button -->
                                <form method="POST" action="{{ route('fridgeedit.delete', ['fridgeId' => $fridge->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color: red; color: white; border-radius: 10px; padding: 6px 12px; font-size: 16px; margin-right: 20px;" onclick="return confirm('確定要刪除這個冰箱嗎？')">刪除</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
