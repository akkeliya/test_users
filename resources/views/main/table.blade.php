@if(sizeof($test_users))
    <button class="btn btn-primary" onclick="loadItems(-1)">Предыдущая страница</button>
    <button class="btn btn-primary" onclick="loadItems(1)">Следующая страница</button>
<table>
    <tbody>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Страна</th>
        <th>Телефон</th>
        <th>Компания</th>
    </tr>
    @foreach($test_users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->country}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->company}}</td>
    </tr>
    @endforeach
</table>
@else
    <p>Данные отсутствуют!</p>
@endif
