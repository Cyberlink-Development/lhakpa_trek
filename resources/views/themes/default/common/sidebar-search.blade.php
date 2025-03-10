<div class="uk-width-1-4@m">
    <div class="uk-sidebar uk-grey-bg uk-padding-small " uk-sticky="offset: 90; end: !" style="border-top: 5px solid var(--primary);"> 
        <div class="uk-title-font">
            <span class="uk-white  dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>Search your way</span>
        </div>
        {{-- <form method="GET"> --}}
            <div class="uk-margin">
                <select class="uk-select" aria-label="Difficulty" id="trekGrade">
                    <option selected disabled>Select Trip Grade</option>
                    @foreach ($trekGrade as $grade)
                        <option value="{{ $grade->id }}">{{$grade->trip_grade}}</option>
                    @endforeach
                </select>
            </div>
            <div class="uk-margin">
                <select class="uk-select" aria-label="Difficulty" id="duration">
                    <option selected disabled>Duration</option>
                    <option value="7">One Week</option>
                    <option value="15">Two Week</option>
                    <option value="365"> Long Stay</option>
                </select>
            </div>
            <div class="uk-margin uk-list-select">
                <select class="uk-select" aria-label="Difficulty" id="priceRange">
                    <option selected disabled>Price Range</option>
                    <option value="1501">Budget Friendly</option>
                    <option value="5001">Standard</option>
                    <option value="100001">Premium</option>
                </select>
            </div>
            <div class="uk-flex uk-text-center">
                <button type="button" id="searchButton" class="uk-button uk-padding-remove uk-btn uk-btn-secondary uk-width-1-1">Search Now</a>
            </div>
        {{-- </form> --}}
    </div>
    <div id="my-id"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {

        $('#searchButton').on('click', function () {
            let trekGrade = $('#trekGrade').val();
            let duration = $('#duration').val();
            let priceRange = $('#priceRange').val();
            let id = '{{$item->id}}';
        
            $.ajax({
                url: "{{ route('search.trips') }}",
                method: "GET",
                data: {
                    trek_grade: trekGrade,
                    duration: duration,
                    price_range: priceRange,
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                beforeSend: function () {
                    $('#tripsearchResult').html('<div class="uk-text-center"><span uk-spinner></span> Loading...</div>');
                },
                success: function (response) {
                    if (response.success) {
                        $('#tripsearchResult').html(response.html);
                    } else {
                        $('#tripsearchResult').html('<div class="uk-alert uk-alert-danger">Error: ' + response.error + '</div>');
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                    $('#tripsearchResult').html('<div class="uk-alert uk-alert-danger">Error loading results. Please try again.</div>');
                }
            });
        });
    });
</script>