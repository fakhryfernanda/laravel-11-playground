<div class="p-4 pb-20">
    @if ($step == 1)
        <div class="w-[800px] mx-auto">
            <div class="text-center">
                <h1 class="text-[34px] text-deep-indigo font-bold">Post Your Requirements</h1>
                <div class="mt-3 text-lg text-lavender-gray font-medium">
                    <p >Please fill the form below to receive a quote for workspace.</p>
                    <p>Please add all the details required.</p>
                </div>
            </div>
            <div class="mt-12 px-16 pt-6 pb-24 rounded-[34px] bg-[#FAF8F8] border border-[#EFF0F6] shadow-md">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="text-2xl text-deep-indigo font-bold">Contact details</h3>
                    <p class="text-lg text-lavender-gray font-medium">Please fill your information so we can get in touch with you.</p>
                </div>
                <div class="mt-12">
                    <div class="space-y-12">
                        <x-form.input
                            placeholder="Your Name"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Name"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <x-form.input
                            placeholder="(123) 456 - 789"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Your Number"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <x-form.input
                            placeholder="Your Mail ID"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Email"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <x-form.input
                            placeholder="dd - mm - yyyy"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Date"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button wire:click="nextStep()" class="block mx-auto px-10 py-5 rounded-[56px] bg-gradient-to-b from-[#9E96F2] to-[#EC31F0] shadow-md text-2xl text-white font-bold ">
                    Next
                </button>
            </div>
        </div>
    @endif

    @if ($step == 2)
        <div class="w-[800px] mx-auto">
            <div class="mt-12 px-16 pt-6 pb-24 rounded-[34px] bg-[#FAF8F8] border border-[#EFF0F6] shadow-md">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="text-2xl text-deep-indigo font-bold">Your Requirements</h3>
                </div>
                <div class="mt-12">
                    <div class="space-y-12">
                        <x-form.input
                            placeholder="Event Space"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Space Type"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <x-form.input
                            placeholder=""
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Number of People"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <div class="flex gap-16">
                            <x-form.input
                                placeholder="dd - mm - yyyy"
                                class="!rounded-[46px] px-5 pt-5 pb-6"
                                :required="true"
                                label="Check In"
                                labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                            />
                            <x-form.input
                                placeholder="dd - mm - yyyy"
                                class="!rounded-[46px] px-5 pt-5 pb-6"
                                :required="true"
                                label="Check Out"
                                labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                            />
                        </div>
                        <x-form.input
                            placeholder="City/Area"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Location"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                        <x-form.input
                            placeholder="No"
                            class="!rounded-[46px] px-5 pt-5 pb-6"
                            :required="true"
                            label="Any specific preferences"
                            labelClass="!text-lg text-deep-indigo font-medium mb-[18px]"
                        />
                    </div>
                </div>
            </div>
            <div class="mt-12 flex justify-between">
                <button wire:click="previousStep()" class="block px-[3px] py-[3px] rounded-[56px] bg-gradient-to-b from-[#9E96F2] to-[#EC31F0] shadow-md">
                    <div class="px-[37px] py-[17px] bg-white rounded-[56px] text-2xl text-[#FF3AF7] font-bold">
                        Back
                    </div>
                </button>
                <button class="block px-10 py-5 rounded-[56px] bg-gradient-to-b from-[#9E96F2] to-[#EC31F0] shadow-md text-2xl text-white font-bold ">
                    Submit
                </button>
            </div>
        </div>
    @endif
</div>
