<h1>薬局一覧</h1>

@foreach($pharmacies as $key => $pharmacy)
    <table rules='all' bgcolor='aqua'>
        <tr>
            <th>{{ $key }}ばんめ</th>
            <td>{{ $pharmacy->name }}</td>
            <td>{{ $pharmacy->email }}</td>
            <td>{{ $pharmacy->postcode }}</td>
            <td>{{ $pharmacy->address }}</td>
            <td>{{ $pharmacy->normal_telephone_number }}</td>
            <td>{{ $pharmacy->emergency_telephone_number }}</td>
        </tr>
        <br>
    </table>
@endforeach

<div>
    <a href={{ route('pharmacies.create') }}>薬局新規作成</a><br>
    <a href={{ route('login') }}>ログインページに戻る</a><br>
</div>