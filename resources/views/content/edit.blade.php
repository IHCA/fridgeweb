<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="grid grid-cols-2 gap-6 lg:gap-8">
                        <div class="py-6">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <h2 style="font-size:25px;"><strong>冰箱資訊</strong></h2></br>
                                        <p><strong>冰箱名稱：</strong> {{ $fridge['name'] }}</p>
                                        <p><strong>縣市：</strong> {{ $fridge['city'] }}</p>
                                        <p><strong>地區：</strong> {{ $fridge['dist'] }}</p>
                                        <p><strong>路段：</strong> {{ $fridge['address'] }}</p>
                                        <p><strong>所屬機構：</strong> {{ $fridge['company'] }}</p>
                                        <p><strong>聯絡電話：</strong> {{ $fridge['telephone'] }}</p>
                                        <p><strong>電子郵件：</strong> {{ $fridge['email'] }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="py-6">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <h2 style="font-size:25px;"><strong>冰箱食物</strong></h2></br>
                                    <table>
                                    <th>名稱</th><th>種類</th><th>數量</th><th>放入時間</th><th>過期時間</th>
                                    @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['kind'] }}</td>
                                        <td>{{ $product['num'] }}</td>
                                        <td>{{ $product['put_time'] }}</td>
                                        <td>{{ $product['alarm_time'] }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('content.update', ['fridgeId' => $fridge['id'], 'productId' => $product['id'] ]) }}">
                                                @csrf
                                                @method('PATCH')
                                                <!-- Add your form fields and other content here -->
                                                <button type="submit">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="4">目前冰箱內沒有食物</td></tr>
                                @endforelse

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
