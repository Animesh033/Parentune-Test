<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link-tab active" id="blogs-tab" data-bs-toggle="pill" href="#blogs" role="tab" aria-controls="blogs" aria-selected="true">Blogs</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link-tab" id="ask-experts-tab" data-bs-toggle="pill" href="#ask-experts" role="tab" aria-controls="ask-experts" aria-selected="false">Ask Experts</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="blogs" role="tabpanel"  aria-labelledby="blogs-tab">
            <x-blogs></x-blogs>
        </div>
        <div class="tab-pane fade" id="ask-experts" role="tabpanel" aria-labelledby="ask-experts-tab">
            <x-ask-experts></x-ask-experts>
        </div>
    </div>
</div>
