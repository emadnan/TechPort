
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
            font-size:22px;


        }
        .btn_primary:hover{
            color:white;
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
                <img class="mb-3" src="{{ URL('images/DrassLogo1.png') }}" alt="">
                <br>
                <img src="{{ URL('images/DrassLogo2.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-2"></div>
        {{-- End --}}

        {{-- Search Bar goes here --}}
        <div class="row top-search-bar">
            <div class="col-md-9 mb-2">
                <form>
                    <div class="search-local">
                        <input type="text" placeholder="Search Project">
                        <button>
                            <i class="fas fa-search fa-light fa-sm " style="color:#f4f7fa; "></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"> 
                <a href="{{ url('/AdvanceSearch') }}"><button type="button"  class="btn btn-lg btn_primary float-right">Advanced
                    Search </button></a>
            </div>
        </div>
        {{-- end --}}