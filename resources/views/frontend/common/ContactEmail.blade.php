<div style="font-family: Arial, sans-serif; background:#b8b7b7; margin: 0; padding: 15px;">

    <div
        style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center">
            <img height="80" width="150" src="{{ $logo ?? '' }}">
        </div>

        <!-- for admin -->
        @if ($emailType == 'admin')
            <div style="margin-bottom: 10px;">
                Hi New Swati Carriers {{ $data['name'] }}, want to connect with you.
            </div>
            <div style="margin-bottom: 20px;">
                <table style="border:1px solid black; border-collapse :collapse;">
                    <tr>
                        <th>Name</th>
                        <td>{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Phone no</th>
                        <td>{{ $data['number'] }}</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ strip_tags($data['message']) }}</td>
                    </tr>
                </table>
            </div>
            <div>
                <p style="color: #666; font-style: italic;">Best Regards,</p>
                <p style="color: #666;">New Swati Carries Team.</p>
            </div>
        @endif
    </div>

</div>
