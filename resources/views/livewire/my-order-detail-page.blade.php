<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">Order Details</h1>

    <!-- Grid -->
    <div class="grid gap-4 mt-5 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide text-gray-500 uppercase">
                Customer
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              <div>{{ $address->first_name }}</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 22h14" />
              <path d="M5 2h14" />
              <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
              <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
            </svg>
          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide text-gray-500 uppercase">
                Order Date
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">
                {{ $order->created_at->format('d-m-Y') }}
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
              <path d="m12 12 4 10 1.7-4.3L22 16Z" />
            </svg>
          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide text-gray-500 uppercase">
                Order Status
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
                @php
                    $status = '';
                    if($order->status =='new'){
                        $status = '<span class="px-3 py-1 text-white bg-blue-500 rounded shadow">New</span>';
                    }
                    if($order->status =='processing'){
                        $status = '<span class="px-3 py-1 text-white bg-yellow-500 rounded shadow">Processing</span>';
                    }
                    if($order->status =='shipped'){
                        $status = '<span class="px-3 py-1 text-white bg-green-500 rounded shadow">Shipped</span>';
                    }
                    if($order->status =='delivered'){
                        $status = '<span class="px-3 py-1 text-white bg-green-700 rounded shadow">Delivered</span>';
                    }
                    if($order->status =='cancelled'){
                        $status = '<span class="px-3 py-1 text-white bg-red-500 rounded shadow">Cancelled</span>';
                    }



                @endphp
              <span class="px-3 py-1 text-white bg-yellow-500 rounded shadow">{!! $status !!}</span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
              <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
              <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
            </svg>
          </div>

          <div class="grow">
            <div class="flex items-center gap-x-2">
                @php
                $payment_status = '';
                    if($order->payment_status == 'pending'){
                      $payment_status = '<span class="px-3 py-1 text-white bg-blue-500 rounded shadow">Pending</span>';
                    }
                    if($order->payment_status == 'paid'){
                      $payment_status = '<span class="px-3 py-1 text-white bg-green-600 rounded shadow">Paid</span>';
                    }
                    if($order->payment_status == 'failed'){
                      $payment_status = '<span class="px-3 py-1 text-white bg-red-500 rounded shadow">Failed</span>';
                    }

                @endphp
              <p class="text-xs tracking-wide text-gray-500 uppercase">
                Payment Status
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
             {!! $payment_status !!}
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->

    <div class="flex flex-col gap-4 mt-4 md:flex-row">
      <div class="md:w-3/4">
        <div class="p-6 mb-4 overflow-x-auto bg-white rounded-lg shadow-md">
          <table class="w-full">
            <thead>
              <tr>
                <th class="font-semibold text-left">Product</th>
                <th class="font-semibold text-left">Price</th>
                <th class="font-semibold text-left">Quantity</th>
                <th class="font-semibold text-left">Total</th>
              </tr>
            </thead>
            <tbody>

              <!--[if BLOCK]><![endif]-->

              <!--[if ENDBLOCK]><![endif]-->
              @foreach ($order_items as $order)
                <tr wire:key="53">
                <td class="py-4">
                  <div class="flex items-center">
                    <img class="w-16 h-16 mr-4" src="{{url('storage',$order->product->images[0])}}" alt="Product image">
                    <span class="font-semibold">{{ $order->name }}</span>
                  </div>
                </td>
                <td class="py-4">{{ Number::currency($order->unit_amount,'INR') }}</td>
                <td class="py-4">
                  <span class="w-8 text-center">{{ $order->quantity }}</span>
                </td>
                <td class="py-4">{{ Number::currency($order->total_amount,'INR') }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="p-6 mb-4 overflow-x-auto bg-white rounded-lg shadow-md">
          <h1 class="mb-3 font-bold font-3xl text-slate-500">Shipping Address</h1>
          <div class="flex items-center justify-between">
            <div>
              <p>{{ $address->street_address }},{{ $address->city }},{{ $address->state }},{{ $address->zip_code }}</p>
            </div>
            <div>
              <p class="font-semibold">Phone:</p>
              <p>{{ $address->phone }}</p>
            </div>
          </div>
        </div>

      </div>
      <div class="md:w-1/4">
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h2 class="mb-4 text-lg font-semibold">Summary</h2>
          <div class="flex justify-between mb-2">
            <span>Subtotal</span>
            <span>{{ Number::currency($order->order->grand_total,'INR') }}</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Taxes</span>
            <span>{{ Number::currency(0,'INR') }}</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Shipping</span>
            <span>{{ Number::currency(0,'INR') }}</span>
          </div>
          <hr class="my-2">
          <div class="flex justify-between mb-2">
            <span class="font-semibold">Grand Total</span>
            <span class="font-semibold">{{ Number::currency($order->order->grand_total,'INR') }}</span>
          </div>

        </div>
      </div>
    </div>
  </div>
