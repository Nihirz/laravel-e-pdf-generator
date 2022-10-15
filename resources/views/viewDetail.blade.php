<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>
		<style>
			.invoice-box {max-width: 800px;margin: auto;padding: 30px;border: 1px solid #eee;box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);font-size: 16px;line-height: 24px;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;color: #555;}
			.invoice-box table {width: 100%;line-height: inherit;text-align: left;}
            .invoice-box table td {padding: 5px;vertical-align: top;}
            .invoice-box table tr td:nth-child(2) {text-align: right;}
            .invoice-box table tr.top table td {padding-bottom: 20px;}
            .invoice-box table tr.top table td.title {font-size: 45px;line-height: 45px;color: #333;}
            .invoice-box table tr.information table td {padding-bottom: 40px;}
            .invoice-box table tr.heading td {background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;}
            .invoice-box table tr.details td {padding-bottom: 20px;}
            .invoice-box table tr.item td {border-bottom: 1px solid #eee;}
            .invoice-box table tr.item.last td {border-bottom: none;}
            .invoice-box table tr.total td:nth-child(2) {border-top: 2px solid #eee;font-weight: bold;}
            @media only screen and (max-width: 600px) {.invoice-box table tr.top table td {width: 100%;display: block;text-align: center;}.invoice-box table tr.information table td {width: 100%;display: block;text-align: center;}}
            .invoice-box.rtl {direction: rtl;font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;}
            .invoice-box.rtl table {text-align: right;}
            .invoice-box.rtl table tr td:nth-child(2) {text-align: left;}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
                    <td>Test Interiar</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Created: {{ $client->created_at }}<br /></td>
				</tr>
				<tr class="information">
                    <td>Near Dummy road</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$client->address}}</td>
                </tr>
                <tr class="information">
                    <td>+0 12345 6789</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$client->phone}}</td>
                </tr>
                <tr class="information">
                    <td>Jhon Doe</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$client->name}}</td>
                </tr>
                <tr class="information">
                    <td>test@yaho.com</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$client->email}}</td>
                </tr>
				<tr class="heading">
					<td>Category</td>
                    <td>Item</td>
					<td>Unit</td>
					<td>Quentity</td>
					<td>Price</td>
					<td>Total</td>
				</tr>
				@foreach ($clientproduct as $clientproducts)
                <tr class="item">
                    <td>{{$clientproducts->cname}}</td>
                    <td>{{$clientproducts->pname}}</td>
                    <td>{{$clientproducts->unit}}</td>
                    <td>{{$clientproducts->quantity}}</td>
                    <td>{{$clientproducts->price}}</td>
                    <td>{{$clientproducts->grandtotal}}</td>
                </tr>
                @endforeach
                <?php
                    $gtotal = 0;
                    foreach ($clientproduct as $clientproductes){
                        $gtotal += $clientproductes->grandtotal;
                    }
                    $gtotal = 0+$gtotal;
                ?>
				<tr class="total">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
					<td>Grand Total: {{$gtotal}}</td>
				</tr>
			</table>
		</div>
	</body>
</html>
