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