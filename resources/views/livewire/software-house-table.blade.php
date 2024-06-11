<div>
    <div class="mb-4">
        <input type="text" class="form-control" placeholder="Search..." wire:model="search">
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Summary</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Website</th>
                <th>Person</th>
                <th>Designation</th>
                <th>Source Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($softwareHouses as $softwareHouse)
                <tr>
                    <td>{{ $softwareHouse->name }}</td>
                    <td>{{ $softwareHouse->summary }}</td>
                    <td>{{ $softwareHouse->location }}</td>
                    <td>{{ $softwareHouse->phone }}</td>
                    <td>{{ $softwareHouse->email }}</td>
                    <td>{{ $softwareHouse->website }}</td>
                    <td>{{ $softwareHouse->person }}</td>
                    <td>{{ $softwareHouse->designation }}</td>
                    <td><a href="{{ $softwareHouse->source_link }}" target="_blank">Link</a></td>
                </tr>
            @endforeach
        </tbody><div>
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Search..." wire:model="search">
            </div>
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Summary</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Person</th>
                        <th>Designation</th>
                        <th>Source Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($softwareHouses as $softwareHouse)
                        <tr>
                            <td>{{ $softwareHouse->name }}</td>
                            <td>{{ $softwareHouse->summary }}</td>
                            <td>{{ $softwareHouse->location }}</td>
                            <td>{{ $softwareHouse->phone }}</td>
                            <td>{{ $softwareHouse->email }}</td>
                            <td>{{ $softwareHouse->website }}</td>
                            <td>{{ $softwareHouse->person }}</td>
                            <td>{{ $softwareHouse->designation }}</td>
                            <td><a href="{{ $softwareHouse->source_link }}" target="_blank">Link</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
            <div class="mt-4">
                {{ $softwareHouses->links() }}
            </div>
        </div>
        
    </table>

    <div class="mt-4">
        {{ $softwareHouses->links() }}
    </div>
</div>
