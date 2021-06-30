<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
            <tr>
                <th>Idcust</th>
        <th>Idbooking</th>
        <th>Bookstart</th>
        <th>Bookend</th>
        <th>Bookdest</th>
        <th>Bookpick</th>
        <th>Booktotal</th>
        <th>Bookstatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                       <td>{{ $booking->IDCUST }}</td>
            <td>{{ $booking->IDBOOKING }}</td>
            <td>{{ $booking->BOOKSTART }}</td>
            <td>{{ $booking->BOOKEND }}</td>
            <td>{{ $booking->BOOKDEST }}</td>
            <td>{{ $booking->BOOKPICK }}</td>
            <td>{{ $booking->BOOKTOTAL }}</td>
            <td>{{ $booking->BOOKSTATUS }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
