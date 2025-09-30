<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Midtrans Payment</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" 
            data-client-key="{{ config('services.midtrans.client_key') }}">
    </script>
</head>
{{-- @dd(config('services.midtrans.client_key')) --}}
<body>
    <h1>Midtrans Payment Page</h1>
    <div id="status">Loading Snap...</div>

    <script>
        async function initPayment() {
            try {
                const res = await fetch("{{ route('midtrans.token') }}");
                const data = await res.json();
                if (!data.token) throw new Error("No token");

                document.getElementById('status').innerText = "Snap token received";
                window.snap.pay(data.token, {
                    onSuccess: () => window.location.href = "{{ route('order.success') }}",
                    onPending: () => window.location.href = "{{ route('order.success') }}",
                    onError: () => window.location.href = "{{ route('order.failed') }}",
                    onClose: () => alert('Payment popup closed')
                });
            } catch (error) {
                console.error("Token fetch failed:", error);
                document.getElementById('status').innerText = "Failed to load Snap";
            }
        }

        initPayment();
    </script>
</body>
</html>
