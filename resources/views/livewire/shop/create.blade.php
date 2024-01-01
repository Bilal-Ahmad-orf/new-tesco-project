@section('style')
    <style>
        label {
            font-size: 13px;
            color: #777777;
            margin-bottom: 5px;
        }

        .mheading {
            font-size: 15px;
            font-weight: 600;
            padding-top: 15px;
            color: #1b1b28;
            padding-bottom: 10px;
        }

        .fheading {
            font-size: 24px;
            font-weight: 500;
            color: #1b1b28;
        }

        .spbtn {
            background: #02549F;
            height: 42px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600
        }

        .bredcrrum01 {
            padding-top: 20px;
        }

        .bredcrrum {
            font-size: 13px;
            font-weight: 600;
            color: #1b1b28;
        }

        .bredcrrum a {
            font-weight: 400;
            color: #777777;
        }
    </style>
@endsection
<div style="background: #F2F3F8" class="pb-3">
    <div class="container">
        <nav style="margin-bottom: 50px" class="bredcrrum01 d-flex justify-content-between align-center">
            <div class="fheading">Register Your Shop</div>
            <div class="bredcrrum">
                <a href="#"> Home</a>
                <span class="px-1">/</span>
                "Register Your Shop"
            </div>
        </nav>

        <form class="mx-auto pt-2 pb-2 rounded" style="max-width: 553px" wire:submit.prevent="submit">
            @csrf
            {{-- <div class="bg-success text-white text-center"> {{ $message }}</div> --}}
            <div class="bg-white mb-2">
                <div class="px-4 mb-1 mheading" style="border-bottom: 1px solid #dee2e6">
                    Personal Info
                </div>
                <div class="px-4 pt-2 pb-2">
                    <div>
                        <label for="your_name" class="form-label">Your name *</label>
                        <input type="text" placeholder="Name" class="form-control bg-transparent mb-1"
                            wire:model="name" id="your_name" aria-describedby="Your name">
                        <p class="mb-0"></p>
                    </div>
                    <div>
                        <label for="your_email" class="form-label">Your Email *</label>
                        <input type="email" placeholder="Email" class="form-control bg-transparent mb-1"
                            wire:model="email" id="your_email" aria-describedby="Your Email">
                        <p class="mb-0"></p>
                    </div>
                    <div>
                        <label for="your_password" class="form-label">Your Password *</label>
                        <input type="text" placeholder="Password" class="form-control bg-transparent mb-1"
                            wire:model="password" id="your_password" aria-describedby="Your Password">
                        <p class="mb-0"></p>
                    </div>
                    <div class="mb-2">
                        <label for="repeat_password" class="form-label">Repeat Password *</label>
                        <input type="text" placeholder="Confirm Password" class="form-control bg-transparent mb-1"
                            wire:model="rpt_password" id="repeat_password" aria-describedby="Repeat Password">
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>

            <div class="bg-white">
                <div class="mheading px-4 mb-1" style="border-bottom: 1px solid #dee2e6">
                    Basic Info
                </div>
                <div class="px-4 pt-2 pb-2">
                    <div>
                        <label for="shop_name" class="form-label">Shop Name *</label>
                        <input type="text" placeholder="Shop Name" class="form-control bg-transparent mb-1"
                            wire:model="shop_name" id="shop_name" aria-describedby="shop name">
                        <p class="mb-0"></p>
                    </div>
                    <div>
                        <label for="emergency_contact" class="form-label">Emergency Contact *</label>
                        <input type="text" placeholder="Emergency Contact" class="form-control bg-transparent mb-1"
                            wire:model="emergency_contact" id="emergency_contact" aria-describedby="emergency contact">
                        <p></p>
                    </div>
                    <div>
                        <label for="emergency_cmail" class="form-label">Emergency Email</label>
                        <input type="text" placeholder="Emergency Email" class="form-control bg-transparent mb-1"
                            wire:model="emergency_cmail" id="emergency_cmail" aria-describedby="Emergency Email">
                        <p></p>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address *</label>
                        <input type="text" placeholder="Address" class="form-control bg-transparent mb-1"
                            wire:model="address" id="address" aria-describedby="Address">
                        <p></p>
                    </div>
                    <div class="mb-2">
                        <label for="invite_code" class="form-label">Invite code</label>
                        <input type="text" placeholder="Invite code" class="form-control bg-transparent mb-1"
                            wire:model="invite_code" id="invite_code" aria-describedby="Invite code">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary fw-600 border-0 spbtn">
                    Register Your Shop
                </button>
            </div>
        </form>
    </div>
</div>
@section('script')
    <script></script>
@endsection
