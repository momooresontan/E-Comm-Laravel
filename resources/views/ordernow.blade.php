@extends('layout')

@section('content')
    <div class="custom-product">
        <div class="col-sm-10 ms-3">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total Amount</td>
                        <td class="fw-bold">$ {{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/place-order" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="pay" class="form-label fw-bold">Delivery Address: </label><br>
                        <textarea type="text" class="form-control" name="address" placeholder="Enter your address: "></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pay" class="form-label fw-bold">Payment Method:</label><br>
                        <input type="radio" value="cash" name="pay"> <span>Cash Payment</span><br>
                        <input type="radio" value="cash" name="pay"> <span>Card Payment</span><br>
                        <input type="radio" value="cash" name="pay"> <span>Transfer</span><br>
                    </div>
                    <button type="submit" class="btn btn-light">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
