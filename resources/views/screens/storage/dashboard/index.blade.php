@extends('layouts.storage.main')
@section('custom_css')
    <style>
        .header {
            display: none !important;
        }
    </style>
@endsection
@section('page_title','Tổng quan')

@section('content')
    <div
        class="grid grid-cols-1 lg:grid-cols-12 flex flex-col items-center lg:items-start gap-y-4 xl:gap-10 pb-4 md:px-4 lg:px-0 bg-[#f9fbfe]">
        <div class="lg:oder-1 order-2 2xl:col-span-12 lg:col-span-12 lg:pl-7 md:pt-7 xl:px-12 px-4">
            <div class="flex flex-col justify-start items-start gap-16">
                <div class="result w-full">
                    <div class="flex flex-col justify-start items-start gap-4">
                        <div class="flex items-center gap-2 pl-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7497 6.30054C25.683 6.71721 25.6497 7.13387 25.6497 7.55054C25.6497 11.3005 28.683 14.3322 32.4163 14.3322C32.833 14.3322 33.233 14.2839 33.6497 14.2172V27.6655C33.6497 33.3172 30.3163 36.6672 24.6497 36.6672H12.3347C6.66634 36.6672 3.33301 33.3172 3.33301 27.6655V15.3339C3.33301 9.66721 6.66634 6.30054 12.3347 6.30054H25.7497ZM26.0847 16.4339C25.633 16.3839 25.1847 16.5839 24.9163 16.9505L20.8847 22.1672L16.2663 18.5339C15.983 18.3172 15.6497 18.2322 15.3163 18.2672C14.9847 18.3172 14.6847 18.4989 14.483 18.7655L9.55134 25.1839L9.44967 25.3339C9.16634 25.8655 9.29967 26.5489 9.79967 26.9172C10.033 27.0672 10.283 27.1672 10.5663 27.1672C10.9513 27.1839 11.3163 26.9822 11.5497 26.6672L15.733 21.2822L20.483 24.8505L20.633 24.9489C21.1663 25.2322 21.833 25.1005 22.2163 24.5989L27.033 18.3839L26.9663 18.4172C27.233 18.0505 27.283 17.5839 27.0997 17.1672C26.918 16.7505 26.5163 16.4672 26.0847 16.4339ZM32.6498 3.33337C34.8665 3.33337 36.6665 5.13337 36.6665 7.35004C36.6665 9.56671 34.8665 11.3667 32.6498 11.3667C30.4332 11.3667 28.6332 9.56671 28.6332 7.35004C28.6332 5.13337 30.4332 3.33337 32.6498 3.33337Z"
                                    fill="#4062FF"/>
                            </svg>
                            <span class="text-black font-medium text-lg">Tình trạng xuất nhập hàng</span>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-1 xl:grid-cols-3 gap-[9px] w-full">
                            <div
                                class="flex items-center justify-between p-4 w-full bg-white rounded-[16px] box-shadow">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="bg-[#EF8E19] rounded-[16px] flex items-center justify-center w-[48px] h-[48px]">
                                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.48 7.9C3.21 7.31 2.48 6.7 2.48 5.75C2.48 4.66 3.49 3.9 5.18 3.9C6.96 3.9 7.62 4.75 7.68 6H9.89C9.82 4.28 8.77 2.7 6.68 2.19V0H3.68V2.16C1.74 2.58 0.18 3.84 0.18 5.77C0.18 8.08 2.09 9.23 4.88 9.9C7.38 10.5 7.88 11.38 7.88 12.31C7.88 13 7.39 14.1 5.18 14.1C3.12 14.1 2.31 13.18 2.2 12H0C0.12 14.19 1.76 15.42 3.68 15.83V18H6.68V15.85C8.63 15.48 10.18 14.35 10.18 12.3C10.18 9.46 7.75 8.49 5.48 7.9Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center gap-[5px]">
                                        <p class="text-[#AEAEAE] text-sm font-normal">Lợi nhuận</p>
                                        <p class="text-black text-base font-bold">-</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-[5px]">
                                    <div class="opacity-0">
                                        <p class="text-[#AEAEAE] text-sm font-normal">1</p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 w-full bg-white rounded-[16px] box-shadow">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="bg-[#636890] rounded-[16px] flex items-center justify-center w-[48px] h-[48px]">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.50001 8.50397H10C10.2652 8.50397 10.5196 8.39862 10.7071 8.21108C10.8947 8.02355 11 7.76919 11 7.50397C11 7.23876 10.8947 6.9844 10.7071 6.79687C10.5196 6.60933 10.2652 6.50397 10 6.50397H9.00001V6.00397C9.00001 5.73876 8.89465 5.4844 8.70711 5.29687C8.51958 5.10933 8.26522 5.00397 8.00001 5.00397C7.73479 5.00397 7.48044 5.10933 7.2929 5.29687C7.10537 5.4844 7.00001 5.73876 7.00001 6.00397V6.55397C6.39243 6.67735 5.85237 7.02207 5.48466 7.52124C5.11696 8.0204 4.94785 8.63839 5.01015 9.25522C5.07246 9.87206 5.36174 10.4437 5.82184 10.8593C6.28194 11.2748 6.88003 11.5046 7.50001 11.504H8.50001C8.63262 11.504 8.75979 11.5567 8.85356 11.6504C8.94733 11.7442 9.00001 11.8714 9.00001 12.004C9.00001 12.1366 8.94733 12.2638 8.85356 12.3575C8.75979 12.4513 8.63262 12.504 8.50001 12.504H6.00001C5.73479 12.504 5.48044 12.6093 5.2929 12.7969C5.10537 12.9844 5.00001 13.2388 5.00001 13.504C5.00001 13.7692 5.10537 14.0235 5.2929 14.2111C5.48044 14.3986 5.73479 14.504 6.00001 14.504H7.00001V15.004C7.00001 15.2692 7.10537 15.5235 7.2929 15.7111C7.48044 15.8986 7.73479 16.004 8.00001 16.004C8.26522 16.004 8.51958 15.8986 8.70711 15.7111C8.89465 15.5235 9.00001 15.2692 9.00001 15.004V14.454C9.60758 14.3306 10.1476 13.9859 10.5154 13.4867C10.8831 12.9875 11.0522 12.3696 10.9899 11.7527C10.9276 11.1359 10.6383 10.5642 10.1782 10.1487C9.71807 9.73312 9.11998 9.50335 8.50001 9.50397H7.50001C7.3674 9.50397 7.24022 9.4513 7.14645 9.35753C7.05269 9.26376 7.00001 9.13658 7.00001 9.00397C7.00001 8.87137 7.05269 8.74419 7.14645 8.65042C7.24022 8.55665 7.3674 8.50397 7.50001 8.50397ZM19 10.004H16V1.00397C16.0007 0.827765 15.9548 0.654498 15.867 0.501721C15.7792 0.348943 15.6526 0.222079 15.5 0.133975C15.348 0.0462063 15.1755 0 15 0C14.8245 0 14.652 0.0462063 14.5 0.133975L11.5 1.85397L8.50001 0.133975C8.34799 0.0462063 8.17554 0 8.00001 0C7.82447 0 7.65203 0.0462063 7.50001 0.133975L4.50001 1.85397L1.50001 0.133975C1.34799 0.0462063 1.17554 0 1.00001 0C0.824471 0 0.652027 0.0462063 0.500008 0.133975C0.347404 0.222079 0.220789 0.348943 0.132986 0.501721C0.0451828 0.654498 -0.000691685 0.827765 7.88288e-06 1.00397V17.004C7.88288e-06 17.7996 0.316078 18.5627 0.878688 19.1253C1.4413 19.6879 2.20436 20.004 3.00001 20.004H17C17.7957 20.004 18.5587 19.6879 19.1213 19.1253C19.6839 18.5627 20 17.7996 20 17.004V11.004C20 10.7388 19.8947 10.4844 19.7071 10.2969C19.5196 10.1093 19.2652 10.004 19 10.004ZM3.00001 18.004C2.73479 18.004 2.48044 17.8986 2.2929 17.7111C2.10536 17.5235 2.00001 17.2692 2.00001 17.004V2.73397L4.00001 3.87397C4.15435 3.95459 4.32589 3.99669 4.50001 3.99669C4.67413 3.99669 4.84567 3.95459 5.00001 3.87397L8.00001 2.15397L11 3.87397C11.1543 3.95459 11.3259 3.99669 11.5 3.99669C11.6741 3.99669 11.8457 3.95459 12 3.87397L14 2.73397V17.004C14.0027 17.3451 14.0636 17.6833 14.18 18.004H3.00001ZM18 17.004C18 17.2692 17.8947 17.5235 17.7071 17.7111C17.5196 17.8986 17.2652 18.004 17 18.004C16.7348 18.004 16.4804 17.8986 16.2929 17.7111C16.1054 17.5235 16 17.2692 16 17.004V12.004H18V17.004Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center gap-[5px]">
                                        <p class="text-[#AEAEAE] text-sm font-normal">Xuất hàng</p>
                                        <p class="text-black text-base font-bold">-</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-[5px]">
                                    <div class="opacity-0">
                                        <p class="text-[#AEAEAE] text-sm font-normal">1</p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 w-full bg-white rounded-[16px] box-shadow">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="bg-[#F0B90B] rounded-[16px] flex items-center justify-center w-[48px] h-[48px]">
                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.075 12.55L1.825 17.8C1.60833 18.0167 1.35833 18.125 1.075 18.125C0.791667 18.125 0.541667 18.0167 0.325 17.8C0.108333 17.5833 0 17.3333 0 17.05C0 16.7667 0.108333 16.5167 0.325 16.3L6.375 10.25C6.575 10.05 6.80833 9.95 7.075 9.95C7.34167 9.95 7.575 10.05 7.775 10.25L11.075 13.55L17.475 6.325C17.6583 6.10833 17.896 6 18.188 6C18.4793 6 18.725 6.1 18.925 6.3C19.1083 6.48333 19.2043 6.704 19.213 6.962C19.221 7.22067 19.1333 7.45 18.95 7.65L11.775 15.75C11.5917 15.9667 11.3543 16.0793 11.063 16.088C10.771 16.096 10.525 16 10.325 15.8L7.075 12.55ZM7.075 6.55L1.825 11.8C1.60833 12.0167 1.35833 12.125 1.075 12.125C0.791667 12.125 0.541667 12.0167 0.325 11.8C0.108333 11.5833 0 11.3333 0 11.05C0 10.7667 0.108333 10.5167 0.325 10.3L6.375 4.25C6.575 4.05 6.80833 3.95 7.075 3.95C7.34167 3.95 7.575 4.05 7.775 4.25L11.075 7.55L17.475 0.325C17.6583 0.108333 17.896 0 18.188 0C18.4793 0 18.725 0.0999999 18.925 0.3C19.1083 0.483333 19.2043 0.704 19.213 0.962C19.221 1.22067 19.1333 1.45 18.95 1.65L11.775 9.75C11.5917 9.96667 11.3543 10.079 11.063 10.087C10.771 10.0957 10.525 10 10.325 9.8L7.075 6.55Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center gap-[5px]">
                                        <p class="text-[#AEAEAE] text-sm font-normal">Nhập hàng</p>
                                        <p class="text-black text-base font-bold">-</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-[5px]">
                                    <div class="opacity-0">
                                        <p class="text-[#AEAEAE] text-sm font-normal">1</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result p-4 xl:p-10 w-full bg-white box-shadow rounded-[24px]">
                    <div class="item flex flex-col justify-start items-start gap-11">
                        <div class="flex flex-col justify-start items-start gap-4 w-full">
                            <div class="flex justify-between items-center  w-full flex-wrap gap-4 md:flex-nowrap">
                                <div class="flex justify-start items-center gap-2 flex-wrap">
                                    <div class="flex items-center gap-[5px]">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.7497 6.30054C25.683 6.71721 25.6497 7.13387 25.6497 7.55054C25.6497 11.3005 28.683 14.3322 32.4163 14.3322C32.833 14.3322 33.233 14.2839 33.6497 14.2172V27.6655C33.6497 33.3172 30.3163 36.6672 24.6497 36.6672H12.3347C6.66634 36.6672 3.33301 33.3172 3.33301 27.6655V15.3339C3.33301 9.66721 6.66634 6.30054 12.3347 6.30054H25.7497ZM26.0847 16.4339C25.633 16.3839 25.1847 16.5839 24.9163 16.9505L20.8847 22.1672L16.2663 18.5339C15.983 18.3172 15.6497 18.2322 15.3163 18.2672C14.9847 18.3172 14.6847 18.4989 14.483 18.7655L9.55134 25.1839L9.44967 25.3339C9.16634 25.8655 9.29967 26.5489 9.79967 26.9172C10.033 27.0672 10.283 27.1672 10.5663 27.1672C10.9513 27.1839 11.3163 26.9822 11.5497 26.6672L15.733 21.2822L20.483 24.8505L20.633 24.9489C21.1663 25.2322 21.833 25.1005 22.2163 24.5989L27.033 18.3839L26.9663 18.4172C27.233 18.0505 27.283 17.5839 27.0997 17.1672C26.918 16.7505 26.5163 16.4672 26.0847 16.4339ZM32.6498 3.33337C34.8665 3.33337 36.6665 5.13337 36.6665 7.35004C36.6665 9.56671 34.8665 11.3667 32.6498 11.3667C30.4332 11.3667 28.6332 9.56671 28.6332 7.35004C28.6332 5.13337 30.4332 3.33337 32.6498 3.33337Z"
                                                fill="#4062FF"/>
                                        </svg>
                                        <span
                                            class="text-title md:font-medium font-bold md:text-xl text-sm uppercase"> Số sản phẩm xuất trong <span
                                                class="date">1 tuần</span></span></span>
                                    </div>

                                    <span class="text-primary font-medium">-</span>
                                </div>
                                <div class="relative ">
                                    <select name=""
                                            class="slect-date outline-none appearance-none rounded-sm border-[1px] rounded-[11px] border-[#c4cdd5] pl-3 pr-5 PY-[9PX] py-[6px] focus:border-primary transition-all duration-200 box-shadow text-[#919EAB] text-sm font-normal">
                                        <option value="0" selected>1 Tuần</option>
                                        <option value="1">1 tháng</option>
                                        <option value="2">1 năm</option>
                                        <option value="3">3 năm</option>
                                    </select>
                                    <svg class="absolute top-2.5 right-2.5 pointer-events-none" width="16" height="16"
                                         viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.246 11.0871C7.20733 11.0495 7.042 10.9072 6.906 10.7748C6.05067 9.99801 4.65067 7.97171 4.22333 6.91115C4.15467 6.75008 4.00933 6.34287 4 6.1253C4 5.91683 4.048 5.7181 4.14533 5.52845C4.28133 5.29205 4.49533 5.10241 4.748 4.9985C4.92333 4.9316 5.448 4.82769 5.45733 4.82769C6.03133 4.72378 6.964 4.66663 7.99467 4.66663C8.97667 4.66663 9.87133 4.72378 10.454 4.80886C10.4633 4.8186 11.1153 4.92251 11.3387 5.03617C11.7467 5.24464 12 5.65185 12 6.08764V6.1253C11.99 6.40912 11.7367 7.00597 11.7273 7.00597C11.2993 8.00938 9.968 9.98892 9.08333 10.7845C9.08333 10.7845 8.856 11.0086 8.714 11.106C8.51 11.258 8.25733 11.3333 8.00467 11.3333C7.72267 11.3333 7.46 11.2482 7.246 11.0871Z"
                                            fill="#919EAB"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="char p-4 xl:p-10 w-full">
                                <canvas id="bar-chart-grouped" width="800" height="315"></canvas>
                                <!-- <canvas id="line-chart" width="800" height="350"></canvas> -->
                            </div>
                        </div>
                        <div class="flex items-center gap-[5px]">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7497 6.30054C25.683 6.71721 25.6497 7.13387 25.6497 7.55054C25.6497 11.3005 28.683 14.3322 32.4163 14.3322C32.833 14.3322 33.233 14.2839 33.6497 14.2172V27.6655C33.6497 33.3172 30.3163 36.6672 24.6497 36.6672H12.3347C6.66634 36.6672 3.33301 33.3172 3.33301 27.6655V15.3339C3.33301 9.66721 6.66634 6.30054 12.3347 6.30054H25.7497ZM26.0847 16.4339C25.633 16.3839 25.1847 16.5839 24.9163 16.9505L20.8847 22.1672L16.2663 18.5339C15.983 18.3172 15.6497 18.2322 15.3163 18.2672C14.9847 18.3172 14.6847 18.4989 14.483 18.7655L9.55134 25.1839L9.44967 25.3339C9.16634 25.8655 9.29967 26.5489 9.79967 26.9172C10.033 27.0672 10.283 27.1672 10.5663 27.1672C10.9513 27.1839 11.3163 26.9822 11.5497 26.6672L15.733 21.2822L20.483 24.8505L20.633 24.9489C21.1663 25.2322 21.833 25.1005 22.2163 24.5989L27.033 18.3839L26.9663 18.4172C27.233 18.0505 27.283 17.5839 27.0997 17.1672C26.918 16.7505 26.5163 16.4672 26.0847 16.4339ZM32.6498 3.33337C34.8665 3.33337 36.6665 5.13337 36.6665 7.35004C36.6665 9.56671 34.8665 11.3667 32.6498 11.3667C30.4332 11.3667 28.6332 9.56671 28.6332 7.35004C28.6332 5.13337 30.4332 3.33337 32.6498 3.33337Z"
                                    fill="#4062FF"></path>
                            </svg>
                            <span class="text-title md:font-medium font-bold md:text-xl text-sm uppercase">Số sản phẩm nhập trong <span
                                    class="date">1 tuần</span></span>
                        </div>
                        <div class="char p-4 xl:p-10 w-full">
                            <canvas id="bar-chart" width="800" height="315"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        $(document).ready(function () {
            new Chart(document.getElementById("bar-chart-grouped"), {
                type: 'bar',
                data: {
                    labels: ["01/2023", "02/2023", "03/2023", "04/2023", "05/2023", "06/2023", "07/2023", "08/2023", "09/2023", "10/2023", "11/2023", "12/2023"],
                    datasets: [
                        {
                            label: "Africa",
                            backgroundColor: "#3e95cd",
                            data: ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',]
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: '-'
                    }, legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function (tooltipItem) {
                                console.log(tooltipItem)
                                return tooltipItem.yLabel;
                            }
                        }
                    }
                }
            });
            new Chart(document.getElementById("bar-chart"), {
                type: 'bar',
                data: {
                    labels: ["01/2023", "02/2023", "03/2023", "04/2023", "05/2023", "06/2023", "07/2023", "08/2023", "09/2023", "10/2023", "11/2023", "12/2023"],
                    datasets: [
                        {
                            label: "Population (millions)",
                            backgroundColor: "#3e95cd",
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    title: {
                        display: true,
                        text: '-'
                    }
                }
            });
        })
        $('.slect-date').change(function () {
            $value = $('.slect-date option:selected').text();
            $('.date').html($value);
        });
    </script>
@endsection