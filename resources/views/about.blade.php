@extends('layout')

@section('content')
    <div class="img-header col12">
        <img src="{{ asset('images/promo-pic7.png') }}">
    </div>

    <div class="text-box-container col12">
        <div class="title-box bg-green">
            <h2>WHAT IS CAMP SILAH?</h2>
        </div>

        <div class="text-box">
            <p>Camp Silah is a summer camp for the youth, ages 8-18, of the Portland metropolitan area. It was launched in the summer of 2018 as a 3 day test run. It was such a huge success that we have decided to keep it going every summer. This camp blended refugee kids with non-refugee kids in a beautiful harmonious way and made the refugee kids feel like they belong to the Portland community. There were about 75 children who attended, a third of them were refugees.</p>
            <p>Camp Silah was sponsored by four organizations in Portland Oregon: Project Untangled, Portland Refugee Support Group, Daughters of Eve, and Sons of Adam. Although our missions are all different, the need for youth initiatives and programs in our Muslim community brought us together and Camp Silah was born!</p>
            <p><strong>Project Untangled</strong> was started by Dr Omar Reda to create safe spaces and healing environments promoting the physical, emotional, and spiritual well-being of trauma survivors. Through psychosocial interventions, Untangled utilizes strength-based and solution-focused methodologies to create a platform for listening, validation, and empowerment with the intention of healing past traumas and developing stronger family bonds that in turn lead to more healthy and resilient communities.</p>
            <p><strong>Daughters of Eve</strong> is a local non-profit focused on providing safe spaces for young Muslim girls. DOE's board is made up of young women who work hard to represent their Muslim peers and provide activities and resources that are fun, educational and above all Islamic. DOE's mission statement is to provide a safe environment for Muslim women that encourages and promotes success, sisterhood, and Islamic identity, all while empowering them to reach their full potential under the umbrella of Islam. DOE strives to contribute to the growth, support, and empowerment of the strong Muslim girls in Portland.  </p>
            <p><strong>Portland Refugee Support Group</strong> has been an integral supporter of the refugees who have landed in Portland, Oregon, over the past two years. Focused on sustainable support, PRSG has worked tirelessly to develop and collaborate with local and national organizations. PSRG has seen the struggle of these refugee children and would like to create more opportunities for them to get to know their new Muslim community and find their place within it. Since being founded in 2016, PRSG has grown by leaps and bounds. Their amazing team of volunteers helps over 200 refugees & immigrants of different ethnicities throughout the Portland, Oregon area.  </p>
            <p><strong>Sons of Adam</strong> is a group, like DOE, who focuses on the Muslim boys in the community. SOA works on curiosity and promoting positive learning environments. Although just starting out, SOA hopes to continue their development and growth in supporting the Muslim community. </p>
        </div>

        <div class="text-box-cta">
            <a href="faqs"><button>Learn More</button></a>
        </div>
    </div>

    <div class="text-box-container col12">
        <div class="title-box bg-blue">
            <h2>Dr Omar Reda</h2>
        </div>

        <div class="text-box">
            <span class="img-floatL" style="background-image:url('{{ asset('images/omar.jpeg') }}')">&nbsp;</span> <p>Receiving his master’s degree from Harvard University in Refugee and Global Mental Health after completing medical school in Libya and while undergoing extensive training with the University of Tennessee, Dr. Omar Reda is now a board-certified psychiatrist practicing at the Providence Healthcare System. Dr. Reda is a leading expert in Psychotraumatology and Trauma-Informed Care as well as the mental health of Muslims, immigrants and refugees, the Libyan revolution, and the Arab Spring, and is the author of several books and a highly sought-after dynamic public speaker. Living in Portland, Oregon with his wife and three daughters, Dr. Reda’s passion for healing focuses on tackling the family dysfunction and youth vulnerability resulting from trauma.</p>

        </div>
    </div>

    <div class="text-box-container col12">
        <div class="title-box bg-blue">
            <h2>NURA ELMAGBARI</h2>
        </div>

        <div class="text-box">
            <span class="img-floatL" style="background-image:url('{{ asset('images/nura.png') }}')">&nbsp;</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies nisi at diam suscipit viverra. Proin a ex tristique leo accumsan placerat quis aliquam est. Vestibulum rhoncus enim ornare turpis aliquet dignissim. Nulla maximus lectus at lobortis tristique. Vivamus eu massa turpis. Praesent felis mi, tempor feugiat sollicitudin vel, volutpat vel lectus. Aliquam ullamcorper consectetur orci, a ultricies erat tempor vitae. Sed pharetra elit in diam posuere sodales. Quisque at interdum erat. Donec semper, erat malesuada bibendum efficitur, urna enim consectetur eros, id pulvinar lorem augue quis risus. Nulla at enim mollis risus fringilla tincidunt ut vel risus. Vestibulum sed malesuada arcu, vitae vulputate ligula. Praesent lobortis luctus metus vel dignissim. Morbi a efficitur mauris, sit amet ultrices lectus. Integer venenatis quam ac odio feugiat, hendrerit sagittis ex laoreet. Sed pretium, nulla a dapibus tempus, lectus ligula ullamcorper nisi, quis luctus libero mi a ligula. Duis non sem ut ipsum egestas aliquam. Donec ultricies egestas suscipit. Fusce tempus tellus vel turpis scelerisque, id egestas risus vehicula..</p>

        </div>
    </div>
@endsection