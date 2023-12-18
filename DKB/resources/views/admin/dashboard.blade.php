<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email       </th>
                                <th>phone number</th>
                                <th>address</th>
                                <th>image</th>
                                <th>message</th>
                                <!-- Other table headers -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id}}</td>
                                <td style="padding: 7px;">{{ $contact->full_name }}</td>
                                <td style="padding: 7px;">{{ $contact->email }}</td>
                                <td style="padding: 7px;">{{ $contact->phone_number }}</td>
                                <td style="padding: 7px;">{{ $contact->address }}</td>
                                <td style="padding: 7px;">{{ $contact->message }}</td>
                                <td style="padding: 7px;">{{ $contact->food }}</td>
                                <td style="padding: 7px;">
                                    @if($contact->image)
                                    <img src="{{ asset('uploads/' . $contact->image) }}" alt="Screenshot" style="max-width: 300px; max-height: 300px;">
                                    @else
                                    No Screenshot
                                    @endif
                                </td>
                                <td style="padding: 7px;">

                                    @if($contact->status === 'pending')
                                    Pending
                                    @else
                                    {{ $contact->status }}
                                    @endif
                                </td>
                                <td style="padding: 7px;">
                                    <form method="POST" action="{{ route('approve.contact', $contact->id) }}">
                                        @csrf
                                        <button type="submit">Approve</button>
                                    </form>
                                </td>
                                <td style="padding: 7px;">
                                    <form method="POST" action="{{ route('decline.contact', $contact->id) }}">
                                        @csrf
                                        <button type="submit">Decline</button>
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
</x-app-layout>
