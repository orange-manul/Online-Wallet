<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Your Wallet</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="text-center">Your Wallet</h3>
                        </div>
                        <!-- Balance -->
                        <div class="mb-4 mt-4">
                            <h5 class="text-center">Current Balance</h5>
                            <p class="text-center">{{-- В файле представления --}}
                                {{ auth()->user()->balance->amount ?? 'N/A' }}

                            </p>
                        </div>
                        <div class="card-body">
                            <!-- Transaction History -->
                            <div class="mb-4">
                                <h5 class="text-center">Transaction History</h5>
                                <!-- Sample transaction list -->
                                <ul class="list-group">
                                    <li class="list-group-item">Received $100 from John Doe</li>
                                    <br>
                                    <li class="list-group-item">Sent $50 to Jane Smith</li>
                                    <!-- Add more transactions here -->
                                </ul>
                            </div>

                            <!-- Transaction Form -->
                            <form>
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="text" class="form-control" id="amount"
                                        placeholder="Enter amount">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description"
                                        placeholder="Enter description">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit Transaction</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</x-app-layout>
