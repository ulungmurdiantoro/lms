<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Midtrans Payment</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" 
            data-client-key="{{ config('gateway_settings.midtrans_client_key') }}">
    </script>
</head>
<body>
    <h1>Midtrans Payment Page</h1>
    <div id="status">Loading Snap...</div>

    <script>
        fetch("{{ route('midtrans.token') }}")
            .then(res => res.json())
            .then(data => {
                document.getElementById('status').innerText = "Snap token received";
                console.log("Snap token:", data.token);

                if (!data.token) {
                    alert("No token received");
                    return;
                }

                window.snap.pay(data.token, {
                    onSuccess: function(result) {
                        window.location.href = "{{ route('order.success') }}";
                    },
                    onPending: function(result) {
                        window.location.href = "{{ route('order.success') }}";
                    },
                    onError: function(result) {
                        window.location.href = "{{ route('order.failed') }}";
                    },
                    onClose: function() {
                        alert('Payment popup closed');
                    }
                });
            })
            .catch(error => {
                console.error("Token fetch failed:", error);
                document.getElementById('status').innerText = "Failed to load Snap";
            });
    </script>
</body>
</html>
