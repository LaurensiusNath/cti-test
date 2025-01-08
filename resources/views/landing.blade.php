<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Page</title>
</head>

<body>
    <div class="min-h-screen">
        @include('navbar')

        <!-- Hero -->
        <div class="h-screen bg-cover bg-center flex items-center md:pl-32" style="background-image: url('{{ asset('assets/hero.png') }}');">
            <div class="flex flex-col w-[540px] items-center mx-auto md:mx-0 md:items-start gap-10">
                <h1 class="text-2xl md:text-4xl font-extrabold text-center md:text-start text-white leading-snug">Cybersecurity Made Simple with Sangfor Cyber Command</h1>
                <p class="text-white font-medium text-center md:text-start text-xl">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
                <a href="" class="flex items-center cursor-pointer group">
                    <div class="h-12 text-white font-semibold px-12 bg-[#04BE02] group-hover:bg-[#59ff50] flex items-center">FREE TRIAL</div>
                    <span class="h-12 flex items-center px-5 bg-[#018000] group-hover:bg-[#268f26]">
                        <i class="fa-solid fa-caret-right text-white"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="flex flex-col lg:flex-row px-16 lg:px-36 xl:px-52 py-24 gap-14 bg-cover bg-center items-center" style="background-image: url('{{ asset('assets/bg-confirmation.png') }}');">
            <div class="flex flex-col gap-6 flex-1">
                <h1 class="font-bold text-[#293660] text-4xl">About Sangfor Cyber Command</h1>
                <div class="flex flex-col gap-4">
                    <p class="font-normal text-[#293660]">
                        Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                    </p>
                    <p class="font-normal text-[#293660]">
                        It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                    </p>
                    <p class="font-normal text-[#293660]">
                        The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                    </p>
                    <p class="font-normal text-[#293660]">
                        Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.
                    </p>
                </div>
            </div>

            <form action="{{ route('form.submit') }}" method="POST" class="bg-white p-6 rounded shadow-md flex-1 flex flex-col gap-3">
                @csrf
                <div>
                    <h1 class="font-bold text-2xl text-[#293660]">Dapatkan Free Trial selama 1 bulan,</h1>
                    <p class="font-bold text-lg text-[#6D6D6D]">analisa keamanan network anda dan lihat hasilnya!</p>
                </div>
                <!-- First Name & Last Name-->
                <div class="flex gap-4 mt-5 mb-5">
                    <div class="flex-1">
                        <label for="first_name" class="pl-2 text-sm font-semibold">First Name<span class="text-red-500"> *</span></label>
                        <input placeholder="First Name" type="text" id="first_name" name="first_name" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                    <div class="flex-1">
                        <label for="last_name" class="pl-2 text-sm font-semibold">Last Name<span class="text-red-500"> *</span></label>
                        <input placeholder="Last Name" type="text" id="last_name" name="last_name" class="w-full border border-gray-300 p-2 rounded" required>
                    </div>
                </div>

                <!-- Corporate Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold pl-2">Corporate Email<span class="text-red-500"> *</span></label>
                    <input placeholder="email@mail.com" type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <!-- Job Title -->
                <div class="mb-4">
                    <label for="job_title" class="block text-sm font-semibold pl-2">Job Title<span class="text-red-500"> *</span></label>
                    <input placeholder="Your job" type="text" id="job_title" name="job_title" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <!-- Company Name -->
                <div class="mb-4">
                    <label for="company_name" class="block text-sm font-semibold pl-2">Company Name<span class="text-red-500"> *</span></label>
                    <input placeholder="Your company" type="text" id="company_name" name="company_name" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <!-- Industry -->
                <div class="mb-4">
                    <label for="industry" class="block text-sm font-semibold pl-2">Industry<span class="text-red-500"> *</span></label>
                    <select id="industry" name="industry" class="w-full border border-gray-300 p-2 rounded" required>
                        <option value="">Select Industry</option>
                        <option value="tech">Tech</option>
                        <option value="education">Education</option>
                        <option value="engineering">Engineering</option>
                    </select>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-semibold pl-2">Phone Number<span class="text-red-500"> *</span></label>
                    <input placeholder="Your number" type="tel" id="phone" name="phone" inputmode="numeric" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <!-- Checkbox -->
                <div class="mb-4 flex items-start gap-2">
                    <input type="checkbox" id="agreement" name="agreement" class="mt-0.5" required>
                    <label for="agreement" class="leading-none text-sm font-semibold text-[#6D6D6D]">click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-[#04BE02] hover:bg-[#59ff50] text-white font-semibold py-2 px-4 rounded w-32 mx-auto">Send</button>
            </form>
        </div>

        <div class="w-full bg-cover bg-center py-20 px-10 flex flex-col gap-8 items-center" style="background-image: url('{{ asset('assets/bg1.png') }}');">
            <h1 class="font-bold text-2xl text-white">Sangfor Cyber Command Advantages</h1>
            <div class="flex flex-wrap justify-center gap-x-6 gap-y-9">
                <div class="basis-[400px] p-8 bg-white flex flex-col gap-5 items-center">
                    <img class="h-[100px]" src="{{ asset('assets/img-threat.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Advanced Threat Detection</h2>
                    <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                </div>
                <div class="basis-[400px] p-8 bg-white flex flex-col gap-5 items-center">
                    <img class="h-[100px]" src="{{ asset('assets/img-network.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Network Visibility and Control</h2>
                    <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                </div>
                <div class="basis-[400px] p-8 bg-white flex flex-col gap-5 items-center">
                    <img class="h-[100px]" src="{{ asset('assets/img-cloud.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Cloud Security</h2>
                    <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                </div>
                <div class="basis-[400px] p-8 bg-white flex flex-col gap-5 items-center">
                    <img class="h-[100px]" src="{{ asset('assets/img-security.png') }}" alt="">
                    <h2 class="font-bold text-lg text-center text-[#293660]">Comprehensive Security Management</h2>
                    <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col gap-8 items-center py-20">
            <h1 class="text-2xl font-bold text-[#293660]">Sangfor Cyber Command Features</h1>
            <div class="flex flex-wrap gap-12 justify-center px-20">
                <div class="basis-[250px] flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img-threatint.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Threat Intelligence</h2>
                    <p class="text-center">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <div class="basis-[250px] flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img-realtime.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Real-Time Detections</h2>
                    <p class="text-center">Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
                <div class="basis-[250px] flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img-threatinv.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Threats Investigation</h2>
                    <p class="text-center">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="basis-[250px] flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img-comprehensive.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Comprehensive Security Solutions</h2>
                    <p class="text-center">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="basis-[250px] flex flex-col items-center gap-3">
                    <img src="{{ asset('assets/img-rapid.png') }}" alt="">
                    <h2 class="font-bold text-lg text-[#293660] text-center">Rapid Response</h2>
                    <p class="text-center">Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>

        <div class="pt-20 pb-32 bg-cover bg-center px-20" style="background-image: url('{{ asset('assets/bg2.png') }}');">
            <div class="flex flex-col gap-8 max-w-[750px] mx-auto">
                <h1 class="font-bold text-4xl text-center text-[#293660]">Sangfor Cyber Command’s Value to Customers</h1>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-4">
                        <img class="h-6" src="{{ asset('assets/checkmark.svg') }}" alt="">
                        <p class="text-[#6C646A] font-medium text-lg">Detect known dan unknown threats</p>
                    </div>
                    <div class="flex gap-4">
                        <img class="h-6" src="{{ asset('assets/checkmark.svg') }}" alt="">
                        <p class="text-[#6C646A] font-medium text-lg">Much better visibility of security posture of the entire infrastructure</p>
                    </div>
                    <div class="flex gap-4">
                        <img class="h-6" src="{{ asset('assets/checkmark.svg') }}" alt="">
                        <p class="text-[#6C646A] font-medium text-lg">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                    </div>
                    <div class="flex gap-4">
                        <img class="h-6" src="{{ asset('assets/checkmark.svg') }}" alt="">
                        <p class="text-[#6C646A] font-medium text-lg">Faster Response to improve overall security control</p>
                    </div>
                    <div class="flex gap-4">
                        <img class="h-6" src="{{ asset('assets/checkmark.svg') }}" alt="">
                        <p class="text-[#6C646A] font-medium text-lg">Much more cost effective than other solutions such as SIEM</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center py-20 relative bg-[#eeeded]">
            <div class="bg-[#293660] absolute -top-4 py-2 px-4">
                <h1 class="text-white font-bold text-xl  md:text-2xl lg:text-3xl">Cyber Command Customers Reference</h1>
            </div>

            <div class="flex flex-wrap justify-center gap-12 w-full px-5 md:px-20">
                <img class="w-full max-w-[150px] md:max-w-[200px] object-contain" src="{{ asset('assets/logo-jnt.png') }}" alt="J&T Logo">
                <img class="w-full max-w-[150px] md:max-w-[200px] object-contain" src="{{ asset('assets/logo-jasa.png') }}" alt="Jasa Logo">
                <img class="w-full max-w-[150px] md:max-w-[200px] object-contain" src="{{ asset('assets/logo-okbank.png') }}" alt="OK Bank Logo">
                <img class="w-full max-w-[150px] md:max-w-[200px] object-contain" src="{{ asset('assets/logo-samudera.png') }}" alt="Samudera Logo">
            </div>
        </div>

        <div class="flex-col flex items-center py-14">
            <h1 class="font-bold text-[#293660] text-xl md:text-3xl">Explore Sangfor Cyber Command with Helios</h1>
            <p class="md:text-lg text-[#6C646A]">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
            <div class="flex flex-col md:flex-row gap-7 mt-10 px-10">
                <div class="flex flex-col items-center gap-4 bg-white p-10 shadow-lg flex-1 basis-1">
                    <img src="{{ asset('assets/ndr.png') }}" alt="">
                    <h2 class="text-[#19456B] font-semibold text-center">NDR Implementation</h2>
                </div>
                <div class="flex flex-col items-center gap-4 bg-white p-10 shadow-lg flex-1 basis-1">
                    <img src="{{ asset('assets/incident.png') }}" alt="">
                    <h2 class="text-[#19456B] font-semibold text-center">Incident Response and Threat Hunting</h2>
                </div>
                <div class="flex flex-col items-center gap-4 bg-white p-10 shadow-lg flex-1 basis-1">
                    <img src="{{ asset('assets/device.png') }}" alt="">
                    <h2 class="text-[#19456B] font-semibold text-center">Device Security Maintenance</h2>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
</body>

</html>
