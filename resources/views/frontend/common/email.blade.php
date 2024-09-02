<div style="font-family: Arial, sans-serif; background:#b8b7b7; margin: 0; padding: 15px;">

    <div
        style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center">
            <img height="80" width="150" src="{{ $logo ?? '' }}">
        </div>
        <!-- for customer -->
        @if ($emailType == 'customer')
            <div style="margin-bottom: 20px;">
                <h1 style="color: #333;">Hi {{ $data['name'] ?? '' }}</h1>
            </div>
            <div style="margin-bottom: 20px;">
                <p style="color: #666; line-height: 1.6;">Thank you for your valuable feedback. We appreciate you  taking the time to share your thoughts with us at New Swati Carreirs. Your input helps us improve and serve you better.</p>
            </div>
            <div>
                <p style="color: #666; font-style: italic;">Best Regards,</p>
                <p style="color: #666;">New Swati Carries Team.</p>
            </div>
        @endif

        <!-- for admin -->
        @if ($emailType == 'admin')
            <div style="margin-bottom: 20px;">
                Hi New Swati Carriers {{ $data['name'] }}, give a feedback on your services
            </div>
            <div>
                <p style="color: #666; font-style: italic;">Best Regards,</p>
                <p style="color: #666;">New Swati Carries Team.</p>
            </div>
        @endif
    </div>

</div>
