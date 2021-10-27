<h3> Sistem Notifikasi </h3>

<table>
    <tr>
        @foreach ($NotificationCenter as $NotificationCenter)
        <td>{{$NotificationCenter->noti_type}}</td>
        <td>{{$NotificationCenter->noti_template}}</td>
        <td> {{$NotificationCenter->noti_subject}}</td>
        <td> {{$NotificationCenter->noti_content}}</td>
        <td> {{$NotificationCenter->noti_status}}</td>
        @endforeach
    </tr>
</table>