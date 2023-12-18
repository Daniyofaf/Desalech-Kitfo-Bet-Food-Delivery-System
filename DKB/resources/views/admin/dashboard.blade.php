<x-app-layout>


<style>
body{
    border-radius: 25px;
}
table{
    font-weight: bolder;
}
th{
    background-color: whitesmoke;
    padding: 10px;
}
td{
    padding: 10px;
}
.up{
    text-transform: uppercase;
}

</style>
<body>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table>
                        <thead>
                            <tr>
                                <th style="padding: 5px;">No</th>
                                <th style="padding: 5px;">Full Name</th>
                                <th style="padding: 5px;">Email</th>
                                <th style="padding: 5px;">Phone Number</th>
                                <th style="padding: 5px;">Address</th> 
                                <th style="padding: 7px;">Message</th>
                                <th style="padding: 10px;">Requested Food</th>
                                <th style="padding: 5px;">Payment Photo</th>
                                <th style="padding: 5px;">Status</th>
                                <th style="padding: 5px;">Actions</th>
                                <th style="padding: 5px;"></th>
                                <!-- Other table headers -->
                            </tr>
                        </thead>
                        <tbody style="border-color: black;">
                            @foreach($contacts as $contact)
                            <tr>
                                <td style="padding: 5px;">{{ $contact->id}}</td>
                                <td style="padding: 5px;" class="up">{{ $contact->full_name }}</td>
                                <td style="padding: 5px;">{{ $contact->email }}</td>
                                <td style="padding: 5px;">{{ $contact->phone_number }}</td>
                                <td style="padding: 5px;" class="up">{{ $contact->address }}</td>
                                <td style="padding: 5px;">{{ $contact->message }}</td>
                                <td style="padding: 5px;" class="up">{{ $contact->food }}</td>
                                <td style="padding: 5px;">
                                    @if($contact->image)
                                    <img src="{{ asset('uploads/' . $contact->image) }}" alt="Screenshot" style="max-width: 130px; max-height: 200px;">
                                    @else
                                    No Screenshot
                                    @endif
                                </td>
                                <td style="padding: 5px; ">

                                    @if($contact->status === 'Pending')
                                    Pending
                                    @else
                                    {{ $contact->status }}
                                    @endif
                                </td>
                                <td style="padding: 5px;">
                                    <form method="POST" action="{{ route('approve.contact', $contact->id) }}">
                                        @csrf
                                        <button type="submit" style="background-color: green; color:white; width: 80px; border-radius:25px;">Approve</button>
                                    </form>
                                </td>
                                <td style="padding: 7px;">
                                    <form method="POST" action="{{ route('decline.contact', $contact->id) }}">
                                        @csrf
                                        <button type="submit" style="background-color: red; color:white; width: 80px; border-radius:25px; ">Decline</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </body>


</x-app-layout>
