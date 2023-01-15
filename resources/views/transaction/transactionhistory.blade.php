@section('css', '/css/transactionhistory.css')
@section('title', 'Transaction History')
@include('layout.header')

<body>
    <div class="transaction-history-body-container">
        <div class="transaction-history-body-title p-4">
            <h1 class="ps-5">My Transaction History</h1>
        </div>
        {{-- @foreach --}}
        <div class="transaction-history-card mb-3">
            <div class="transaction-history-purchase-date">
                <p>Purchased <span class="text-danger">On: </span> [DATE]</p>
            </div>
            <div class="transaction-history-card-base">
                <div class="card-collection d-flex justify-content-center flex-wrap gap-3">
                    {{-- @foreach --}}
                    <div class="card" style="width: 75rem;">
                      <div class="transaction-history-card-body p-4">
                        <div class="row">
                            <div class="col transaction-history-card-rightside">
                                <img src="" class="transaction-history-card-img-top" alt="" style="height: 10rem">
                            </div>
                            <div class="col transaction-history-card-midside">
                                <p class="transaction-history-card-name">[NAME]</p>
                                <p class="transaction-history-card-quantity">[QUANTITY]</p>
                                <p class="transaction-history-card-price">Rp [PRICE]</p>
                                <p class="transaction-history-card-description">[DESCRIPTION]</p>
                            </div>
                            <div class="col transaction-history-card-leftside">
    
                            </div>
                        </div>
                      </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <div class="transaction-history-secondsection">
                    <p>Total Transaction Cost: <span class="text-danger">Rp.[TOTAL PRICE]</span></p>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</body>
</html>