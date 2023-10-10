<style>
    * {

        font-family: 'Open Sans', sans-serif;

    }

    /* search bar and button */
    :root {
        --font: "Inter", sans-serif;
        --royal-blue: #065386;
        --black: #292929;
        --white: #fbfbfb;
    }

    .btn_primary {
        /* height: 50px; */
        /* width: auto; */
        /* font-size: 20px; */
        /* text-align: center; */
        /* border-radius: 0.6rem; */
        background: #065386;
        color: white;
        /* pointer-events: none; */
        /* padding-top: 10px; */
        /* flex-shrink: 0; */
        font-family: Open Sans !important;
        font-weight: 500;
        font-size: 22px;


    }

    .btn_primary:hover {
        color: white;
    }

    .custom-button {
        border-radius: 6px;
        background: #065386;
        color: white;
    }

    .custom-button:hover {
        color: white;
    }

    .custom-button i {
        color: white !important;
        /* Set icon color to white */
    }

    .search-local {
        width: 95%;
        /* max-width: 175rem; */
        display: flex;
        align-items: center;
        column-gap: 2rem;
        padding-left: 2rem;
        background: var(--white);
        border-radius: 0.6rem;
        /* min-height: 7rem; */
        height: 50px;
        border: 0.1rem solid #747474;
        border-right: none;
    }


    /* INPUT */
    .search-local input {
        height: 100%;
        width: 100%;
        flex: 1 1 25rem;
        background: var(--white);
        display: flex;
        outline: none;
        border: none;
        color: var(--black);
        /* font-size: 2.4rem; */
        font-size: 20px;
    }

    input[type="text"]::placeholder {
        /* color: var(--black); */
        /* font-size: 2.4rem; */
        font-size: 20px;
    }

    /* BUTTON */
    .search-local button {
        background: var(--royal-blue);
        border: none;
        border-radius: 0.6rem;
        font-size: 1.4rem;
        height: 50px;
        width: 100px;
        cursor: pointer;
        transition: all 0.3s;
        text-align: center;
        margin-left: 20px;

    }

    /* MEDIAS */
    @media (max-width: 575px) {
        .search-local {
            padding-left: 0;
            column-gap: 0.25rem;
        }

        .search-local button {
            width: 10rem;
        }

        button a {
            display: none;
        }

        .search-local button .search-icon {
            display: block;
            margin-inline: auto;
            color: var(--white);
            font-size: 3rem;
            pointer-events: none;
        }

        input[type="text"]::placeholder {
            font-size: 1.7rem;
        }
    }

    nav {
        width: 50%;
        height: 50px;
        background-color: white;
        line-height: 50px;
    }
</style>
{{-- Site Logo --}}
<div class="row mt-5">
    <div class="col-md-10 mt-5 mb-5">
        <a href="{{ url('/') }}"><img class="mb-3" src="{{ asset('images/DrassLogo1.png') }}" alt=""></a>
        <br>
        <a href="{{ url('/') }}"><img src="{{ asset('images/DrassLogo2.png') }}" alt=""></a>
    </div>
</div>
{{-- <div class="col-md-2"></div> --}}
{{-- End --}}

{{-- Search Bar goes here --}}
<div class="row">
    <div class="col-md-9">
        <form class="form-inline w-100">
            <div class="input-group w-100">
                <input style="font-size: 14px;" type="text" class="form-control w-100" placeholder="Search...">
                <div class="input-group-append">
                    <button class="btn custom-button" type="submit">
                        <i class="fas fa-search"></i> <!-- Font Awesome Search Icon -->
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <a href="{{ url('/AdvanceSearch') }}"><button type="button" class="btn custom-button btn-block">Advanced Search
            </button></a>
    </div>
</div>
{{-- end --}}
