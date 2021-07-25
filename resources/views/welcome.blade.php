@extends('layouts.app')

@section('title', 'Spirit Of Majapahit')

@section('content')
    <div class="hero-wrap js-fullheight">
        <div class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight"
                style="background-image:url(https://i.pinimg.com/originals/61/7b/44/617b44ad3aecea710638469e9a0dde5d.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                                <h2 style="color: #ff8811;">Spirit Of Majapahit</h2>
                                <h1 class="mb-4"><strong>Kunjungi kami sekarang juga</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item js-fullheight"
                style="background-image:url(https://cdnfiles.hdrcreme.com/70973/large/20191105_072018-01.jpg?1573494653);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4 color-white"><strong>Dan temukan keindahan kami</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item js-fullheight"
                style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Sunrise_Mall_Mojokerto.jpg/1200px-Sunrise_Mall_Mojokerto.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4 color-white"><strong>Kota Mojokerto</strong></h1>
                                <h2 style="color: #ff8811;">Prestigious City</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Ingat Pesan Ibu : 3M!</strong></h1>
                    <span class="subheading" style="color: #ff8811;">Selama berwisata saat pandemi Covid-19</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch text-center">
                        <div class="img">
                            <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDYwIDQ0IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGlkPSJQYWdlLTEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgaWQ9IjAyMi0tLVN1cmdpY2FsLU1hc2siIGZpbGw9InJnYigwLDAsMCkiIGZpbGwtcnVsZT0ibm9uemVybyI+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTYuNyAyNC45NTVjNC4zMDUxMDk2IDEuMzQ1OTQwMiA4Ljc4OTM5OSAyLjAzMTM5NTkgMTMuMyAyLjAzMyA0LjUxMDYwMS0uMDAxNjA0MSA4Ljk5NDg5MDQtLjY4NzA1OTggMTMuMy0yLjAzMy4zNDExODg2LS4xMDYxMDc5LjU5OTg1MjEtLjM4NjE3NzYuNjc4NTU0My0uNzM0NzA5NS4wNzg3MDIyLS4zNDg1MzItLjAzNDUxMzYtLjcxMjU3Ni0uMjk3LS45NTUtLjI2MjQ4NjUtLjI0MjQyNDEtLjYzNDM2NTctLjMyNjM5ODQtLjk3NTU1NDMtLjIyMDI5MDUtOC4yNzA2NDAxIDIuNTg5OTk3LTE3LjEzNTM1OTkgMi41ODk5OTctMjUuNDA2IDAtLjUyNzQzMTktLjE2NDAyODYtMS4wODc5NzE0LjEzMDU2ODEtMS4yNTIuNjU4cy4xMzA1NjgxIDEuMDg3OTcxNC42NTggMS4yNTJ6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTYuODQ2IDE4Ljk4OGM0LjM1MjI3NjMuNjczMDY2NyA4Ljc0OTk4ODYgMS4wMDkzOTc3IDEzLjE1NCAxLjAwNiA0LjQwNDAxMTQuMDAzMzk3NyA4LjgwMTcyMzctLjMzMjkzMzMgMTMuMTU0LTEuMDA2LjM1NjQyMDUtLjA1MTI0MzQuNjU3NzY4Ni0uMjkwMTUyOS43ODg5NTk2LS42MjU0ODkxLjEzMTE5MTEtLjMzNTMzNjEuMDcxOTY0My0uNzE1MzEwNy0uMTU1MDYxNy0uOTk0ODExNC0uMjI3MDI1OS0uMjc5NTAwNy0uNTg2Nzg5OC0uNDE1MzYyNC0uOTQxODk3OS0uMzU1Njk5NS04LjUxMzkwNCAxLjMwOTk5NjEtMTcuMTc4MDk2IDEuMzA5OTk2MS0yNS42OTIgMC0uNTQyMDk1NS0uMDc3OTM4My0xLjA0NjAzMTIuMjk0Njc2MS0xLjEzMDM3ODIuODM1ODExNXMuMjgyMjc4NyAxLjA0OTQ0NDYuODIyMzc4MiAxLjE0MDE4ODV6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNDIuNTY5IDMwLjFjLTcuOTMxMzIyMiAzLjg3NTA2NjEtMTcuMjA2Njc3OCAzLjg3NTA2NjEtMjUuMTM4IDAtLjMyNTA2MjMtLjE4MjU4MjYtLjcyNDcwMzktLjE2OTE3MTEtMS4wMzY3OTQxLjAzNDc5MzgtLjMxMjA5MDEuMjAzOTY0OS0uNDg0Nzk5LjU2NDYxLS40NDgwNjA0LjkzNTYyNTFzLjI3NjgyMzUuNjkwNzg0Ni42MjI4NTQ1LjgyOTU4MTFjOC40NzU0MTYxIDQuMTQwMTY0NSAxOC4zODY1ODM5IDQuMTQwMTY0NSAyNi44NjIgMCAuMzQ2MDMxLS4xMzg3OTY1LjU4NjExNTktLjQ1ODU2Ni42MjI4NTQ1LS44Mjk1ODExcy0uMTM1OTcwMy0uNzMxNjYwMi0uNDQ4MDYwNC0uOTM1NjI1MWMtLjMxMjA5MDItLjIwMzk2NDktLjcxMTczMTgtLjIxNzM3NjQtMS4wMzY3OTQxLS4wMzQ3OTM4eiIvPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTU2IDEwaC01LjE4NGMtLjQyMjI1NDYtMS4xOTQzNTA4Ny0xLjU0OTIxNDYtMS45OTQ3NDg2MS0yLjgxNi0yaC0xLjUxYy0zLjcxMzgwNjYtLjA0ODQ5NzE4LTcuMjA4MTMzOC0xLjc2NzU2MDctOS41MTMtNC42OC0xLjcwNzU0MjQtMi4wOTk0NTkxNy00LjI2OTgxNjQtMy4zMTgyNDU2OS02Ljk3Ni0zLjMxODI0NTY5cy01LjI2ODQ1NzYgMS4yMTg3ODY1Mi02Ljk3NiAzLjMxODI0NTY5Yy0yLjMwNTM5ODUgMi45MTI4NjQ3My01LjgwMDUyMzUgNC42MzE5NTkzMy05LjUxNSA0LjY4aC0xLjUxYy0xLjI2Njc4NTQuMDA1MjUxMzktMi4zOTM3NDU0NS44MDU2NDkxMy0yLjgxNiAyaC01LjE4NGMtMi4yMDkxMzkgMC00IDEuNzkwODYxLTQgNHY1YzAgNS4yNTYgNC43MDYgMTAuMDkzIDEwLjQxOCAxMC44ODEgMi44MjAwNjIzIDcuNzA4MDM3NSA5Ljc3MjYxMTIgMTMuMTQ1ODU4OSAxNy45MzMgMTQuMDI2IDEuMDk2NTAxMy4xMjQwNzMxIDIuMjAzNDk4Ny4xMjQwNzMxIDMuMyAwIDguMTU5NjM4My0uODgwODYyMSAxNS4xMTEyNTMtNi4zMTg1NTkzIDE3LjkzMS0xNC4wMjYgNS43MTItLjc4OCAxMC40MTgtNS42MjUgMTAuNDE4LTEwLjg4MXYtNWMwLTIuMjA5MTM5LTEuNzkwODYxLTQtNC00em0tNDQgMGgxLjUxYzQuMzE2OTE1OS0uMDQ4MTMxODcgOC4zODIyNzg0LTIuMDM5MTE5OTMgMTEuMDY3LTUuNDIgMS4zMjczMzgyLTEuNjMzMjQwNTIgMy4zMTk5MDk1LTIuNTgxNDk2ODggNS40MjQ1LTIuNTgxNDk2ODhzNC4wOTcxNjE4Ljk0ODI1NjM2IDUuNDI0NSAyLjU4MTQ5Njg4YzIuNjgzNjkyOCAzLjM4MDUyNzQ3IDYuNzQ4MDAzNiA1LjM3MTU0MDE5IDExLjA2NCA1LjQyaDEuNTFjLjU1MjI4NDcgMCAxIC40NDc3MTUzIDEgMXYxbC0zLS4wMDVoLS4wMmMtNC43NTY0MTk5LS4xMjc5MTc0LTkuMjAzMTY2NC0yLjM4ODAxMDMtMTIuMTEtNi4xNTUtLjk0ODY4MzUtMS4xNjU5NTUyMS0yLjM3MjQ5NjgtMS44NDIwMjgzNS0zLjg3NTY0MzItMS44NDAyODIwOC0xLjUwMzE0NjMuMDAxNzQ2MjctMi45MjUzODQ5LjY4MTEyNTc3LTMuODcxMzU2OCAxLjg0OTI4MjA4LTIuOTA1NjIwNiAzLjc2MTY0NjM5LTcuMzQ4NTExOCA2LjAxNzYwNy0xMi4xIDYuMTQ0aC0uMDIzbC0zIC4wMDd2LTFjMC0uNTUyMjg0Ny40NDc3MTUzLTEgMS0xem0tMTAgOXYtNWMwLTEuMTA0NTY5NS44OTU0MzA1LTIgMi0yaDV2MTBjLjAwMzE2MyAxLjkzMTYzNzcuMjUzNTMwMjIgMy44NTQ5Mjg0Ljc0NSA1LjcyMy0zLjk3My0uOTU3LTcuNzQ1LTQuMzUxLTcuNzQ1LTguNzIzem0yOS40NDIgMjIuOTE4Yy0uOTU4My4xMDgwMDA3LTEuOTI1Ny4xMDgwMDA3LTIuODg0IDAtNy41OTgyMDc1LS44MjkzODA4LTE0LjAxODAyOTYtNi4wMDY4NzA4LTE2LjQzOC0xMy4yNTd2LS4wMWMtLjczNzk3ODQtMi4xMzk5NTg5LTEuMTE2NDMyNy00LjM4NzM2OTQtMS4xMi02LjY1MXYtOGwzLS4wMDVjNS4zNjUzNTIxLS4xMDQ1Nzc5IDEwLjM5NDE2MzctMi42MzUzNDgxIDEzLjY3NS02Ljg4Mi41NjY1MjI2LS43MDExNzkxNSAxLjQxOTE1MTctMS4xMDkzNDI2IDIuMzIwNTkzNi0xLjExMDg5NTEzLjkwMTQ0Mi0uMDAxNTUyNTQgMS43NTU0NzE5LjQwMzY3MTU2IDIuMzI0NDA2NCAxLjEwMjg5NTEzIDMuMjg1MzQwNCA0LjIzMjYyOTYgOC4zMDA0Njg1IDYuNzYyNzc3NyAxMy42NTcgNi44OWguMDIzbDMgLjAwNXY4Yy0uMDAyODIyOCAyLjI2Mjc5MTMtLjM4MDI1OTYgNC41MDk1MDMzLTEuMTE3IDYuNjQ5di4wMWMtMi40MTk3ODEgNy4yNTE4MTk4LTguODQxMTU0NyAxMi40MzAzOTc0LTE2LjQ0MSAxMy4yNTl6bTI2LjU1OC0yMi45MThjMCA0LjM3Mi0zLjc3MiA3Ljc2Ni03Ljc0NSA4LjcyNS40OTE2MzktMS44Njg3MTkxLjc0MjAwNzYtMy43OTI2OTI4Ljc0NS01LjcyNXYtMTBoNWMxLjEwNDU2OTUgMCAyIC44OTU0MzA1IDIgMnoiLz48L2c+PC9nPjwvc3ZnPg=="
                                alt="/" height="100" width="200">
                        </div>
                        <div class="text mt-3">
                            <div class="meta mb-2 text-center">
                                <div>
                                    <h3><a href="#" style="color: #ff8811;"><b>Memakai Masker</b></a><h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch text-center">
                        <div class="img">
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjxnIGlkPSJPdXRsaW5lIj48cGF0aCBkPSJNNDc0LjgsMTYwSDQ5NnYxNkg0NzJhOCw4LDAsMCwxLTQuOTk0LTEuNzVsLTQuNTMtMy42MkEzMzYuMzYsMzM2LjM2LDAsMCwwLDM4Ny4zLDEyNS4xNzVsLTcwLjM1LTI3LjljLS4wODQtLjAzMy0uMTY4LS4wNjgtLjI1Mi0uMWExMy45MTUsMTMuOTE1LDAsMCwwLTEzLjY1NSwyNC4wNzhsNjEuMzMsNDAuMDUyYTcuOTkxLDcuOTkxLDAsMCwxLDMuNDY0LDUuMTE0aDBhMTAyLjY0NiwxMDIuNjQ2LDAsMCwwLDE2LjkxNywzNi4yNjhjMTYuNzcyLDIyLjQ3OCw0MC40NzcsMzIuMzUxLDcwLjQ0NSwyOS4zNTdsMS41OTIsMTUuOTJxLTYuMTE1LjYxMi0xMS43NzMuNmMtMzcuOTMzLDAtNjAuNzI0LTE5LjUyNy03My40NjMtMzYuODE3QTExOS43LDExOS43LDAsMCwxLDM1My44MzUsMTc2SDIxOVYxNjBIMzMzLjExOGwtMzguOTQyLTI1LjQzMmMtLjA3Mi0uMDQ3LS4xNDUtLjA5NS0uMjE1LS4xNDVhMjkuOTE4LDI5LjkxOCwwLDAsMS02Ljc3LTQyLjQ1NSwyOS44OTUsMjkuODk1LDAsMCwxLDM1Ljc3Ni05LjUxOGw3MC4zNjIsMjcuOWMuMDg3LjAzNC4xNzMuMDcuMjU4LjEwN2EzNTIuMywzNTIuMywwLDAsMSw3OC44ODIsNDcuNjczWk0xNzcuNSwxMTJsMzMuNjczLDE2MS42MzIsMTUuNjY0LTMuMjY0TDE5MS45ODksMTAzLjEyMUE4OC4xLDg4LjEsMCwwLDAsMTA0LDE2SDE2VjMyaDg4YTcyLjEwOCw3Mi4xMDgsMCwwLDEsNzEuNTU5LDY0SDEyNi45ODdBMzIuMDU2LDMyLjA1NiwwLDAsMCw5Niw3MkgxNlY4OEg5NmExNi4wMDYsMTYuMDA2LDAsMCwxLDE1Ljk2OCwxNS4zNjdMNzIuMTU1LDMwMi40MzFsMTUuNjksMy4xMzhMMTI2LjU1OSwxMTJaTTQwOC40NjksMjg2LjEzYTM1Mi41LDM1Mi41LDAsMCwwLTc4Ljg3OS00Ny42NjdjLS4wNTktLjAyNS0uMTE3LS4wNTEtLjE3Ny0uMDc0TDI5NC4yNjQsMjI0SDMxMlYyMDhIMjM0LjMzM3YxNmg2Ljc1NGMtLjUwNi41NzgtMSwxLjE3MS0xLjQ2OSwxLjc5NWEyOS45MTUsMjkuOTE1LDAsMCwwLDYuNjM1LDQyLjM1M0wyNzIuMywyODhIMTI4YTMxLjk4NCwzMS45ODQsMCwwLDAtMjQuNDg1LDUyLjU4MUEzMS45OTUsMzEuOTk1LDAsMCwwLDEyMCw0MDBIMjQ4VjM4NEgxMjBhMTYsMTYsMCwwLDEsMC0zMkgyNDhWMzM2SDEyOGExNiwxNiwwLDAsMSwwLTMySDI5NmE4LDgsMCwwLDAsNC44NDktMTQuMzYzbC00NS4wMTctMzQuMzA1Yy0uMDg2LS4wNjUtLjE3My0uMTI5LS4yNjEtLjE5QTEzLjkxNCwxMy45MTQsMCwwLDEsMjY5LjEyNiwyMzFjLjA1OS4wMjUuMTE3LjA1MS4xNzcuMDc0bDUzLjk2MSwyMi4wODlhMzM2LjUyLDMzNi41MiwwLDAsMSw3NS4yMSw0NS40NjVDNDAxLjMwNSwzMDAuODg5LDQwNC4xLDMwNCw0MDgsMzA0aDg4VjI4OEg0MTAuODA3Wm0zLjk1MywxNjIuNzE1QzM5My42ODgsNDU4LjIxMiwzNDUuODQ2LDQ4MCwzMDYuMzM0LDQ4MEgxNjBhMTYsMTYsMCwwLDEsMC0zMmg4OFY0MzJIMTM2YTE2LjAxOSwxNi4wMTksMCwwLDEtMTYtMTZIMTA0YTMyLjA0NCwzMi4wNDQsMCwwLDAsMjguNDExLDMxLjhBMzEuOTksMzEuOTksMCwwLDAsMTYwLDQ5NkgzMDYuMzM0YzE3LjU4MywwLDU1LjMzLTQuMTg0LDExMS41NDYtMzJINDk2VjQ0OEg0MTZBNy45OTQsNy45OTQsMCwwLDAsNDEyLjQyMiw0NDguODQ1Wm0tMjY3LjQzNS0xOTcuNCw2LTEwOC0xNS45NzQtLjg4Ni02LDEwOFptMTYuMDM4LTY1LjgsNyw4NywxNS45NS0xLjI4NC03LTg3Wk03MiwzMzZhMjQsMjQsMCwxLDEtMjQtMjRBMjQuMDI4LDI0LjAyOCwwLDAsMSw3MiwzMzZabS0xNiwwYTgsOCwwLDEsMC04LDhBOC4wMDksOC4wMDksMCwwLDAsNTYsMzM2Wk0yMzIsMTQ0YTI0LDI0LDAsMSwxLDI0LTI0QTI0LjAyOCwyNC4wMjgsMCwwLDEsMjMyLDE0NFptMC0xNmE4LDgsMCwxLDAtOC04QTguMDA5LDguMDA5LDAsMCwwLDIzMiwxMjhabTgwLDI4OGEyNCwyNCwwLDEsMSwyNC0yNEEyNC4wMjgsMjQuMDI4LDAsMCwxLDMxMiw0MTZabTAtMTZhOCw4LDAsMSwwLTgtOEE4LjAwOSw4LjAwOSwwLDAsMCwzMTIsNDAwWiIvPjwvZz48L3N2Zz4K"
                                alt="/" height="100" width="200" />
                        </div>
                        <div class="text mt-3">
                            <div class="meta mb-2 text-center">
                                <div>
                                    <h3><a href="#" style="color: #ff8811;"><b>Mencuci Tangan</b></a><h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch text-center">
                        <div class="img">
                            <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iSWNvbnMiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNzQgNzQiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTYzLjAyOSA2OC42NjJhNC4wMiA0LjAyIDAgMCAxIC0zLjAyOS0xLjM3NiA0LjAyOCA0LjAyOCAwIDAgMSAtNy4wNi0yLjY1NHYtMTMuNzMyYTMuNDY4IDMuNDY4IDAgMCAxIC00Ljk0LTMuMTQzdi0xMS4zNGE2LjY5NCA2LjY5NCAwIDAgMSA2LjY4Ni02LjY4NmgxMC42MjdhNi43IDYuNyAwIDAgMSA2LjY4NyA2LjY4NnYxMS4zNGEzLjQ2OSAzLjQ2OSAwIDAgMSAtNC45NDEgMy4xNDN2MTMuNzMyYTQuMDM1IDQuMDM1IDAgMCAxIC00LjAzIDQuMDN6bS0yLjAyOS00LjAzYTIuMDMgMi4wMyAwIDEgMCA0LjA1OSAwdi0yNC45NjVhMSAxIDAgMCAxIDIgMHY4LjA5YTEuNDcxIDEuNDcxIDAgMSAwIDIuOTQxIDB2LTExLjM0YTQuNjkyIDQuNjkyIDAgMCAwIC00LjY4Ny00LjY4NmgtMTAuNjI3YTQuNjkxIDQuNjkxIDAgMCAwIC00LjY4NiA0LjY4NnYxMS4zNGExLjQ3IDEuNDcgMCAxIDAgMi45NCAwdi04LjA5YTEgMSAwIDAgMSAyIDB2MjQuOTY1YTIuMDMgMi4wMyAwIDAgMCA0LjA2IDB2LTEyLjU5MmExIDEgMCAxIDEgMiAweiIvPjxwYXRoIGQ9Im02MC4wNjYgMzEuNzMxaC0uMTRhNi43IDYuNyAwIDAgMSAtNi41NTctNi43NjZ2LS41MTdhNi43IDYuNyAwIDAgMSA2LjU2OS02Ljc2NmguMTE4YTYuNyA2LjcgMCAwIDEgNi41NzQgNi43NjZ2LjUxN2E2LjcgNi43IDAgMCAxIC02LjU2NCA2Ljc2NnptLS4wMTUtMTIuMDQ5aC0uMTA4YTQuNjk0IDQuNjk0IDAgMCAwIC00LjU3NCA0Ljc2NnYuNTE3YTQuNyA0LjcgMCAwIDAgNC41NzMgNC43NjZoLjEwOGE0LjcgNC43IDAgMCAwIDQuNTgtNC43NjZ2LS41MTdhNC43IDQuNyAwIDAgMCAtNC41NzktNC43NjZ6Ii8+PHBhdGggZD0ibTE3LjAyOSA2OC42NjJhNC4wMiA0LjAyIDAgMCAxIC0zLjAyOS0xLjM3NiA0LjAyOCA0LjAyOCAwIDAgMSAtNy4wNi0yLjY1NHYtMTMuNzMyYTMuNDY4IDMuNDY4IDAgMCAxIC00Ljk0LTMuMTQzdi0xMS4zNGE2LjY5NCA2LjY5NCAwIDAgMSA2LjY4Ni02LjY4NmgxMC42MjdhNi43IDYuNyAwIDAgMSA2LjY4NyA2LjY4NnYxMS4zNGEzLjQ2OSAzLjQ2OSAwIDAgMSAtNC45NDEgMy4xNDN2MTMuNzMyYTQuMDM1IDQuMDM1IDAgMCAxIC00LjAzIDQuMDN6bS0yLjAyOS0xNi42MjJ2MTIuNTkyYTIuMDMgMi4wMyAwIDEgMCA0LjA1OSAwdi0yNC45NjVhMSAxIDAgMCAxIDIgMHY4LjA5YTEuNDcxIDEuNDcxIDAgMSAwIDIuOTQxIDB2LTExLjM0YTQuNjkyIDQuNjkyIDAgMCAwIC00LjY4Ny00LjY4NmgtMTAuNjI3YTQuNjkxIDQuNjkxIDAgMCAwIC00LjY4NiA0LjY4NnYxMS4zNGExLjQ3IDEuNDcgMCAxIDAgMi45NCAwdi04LjA5YTEgMSAwIDAgMSAyIDB2MjQuOTY1YTIuMDMgMi4wMyAwIDAgMCA0LjA2IDB2LTEyLjU5MmExIDEgMCAxIDEgMiAweiIvPjxwYXRoIGQ9Im0xNC4wNjYgMzEuNzMxaC0uMTM5YTYuNyA2LjcgMCAwIDEgLTYuNTU3LTYuNzY2di0uNTE3YTYuNyA2LjcgMCAwIDEgNi41NjgtNi43NjZoLjExOGE2LjcgNi43IDAgMCAxIDYuNTc0IDYuNzY2di41MTdhNi43IDYuNyAwIDAgMSAtNi41NjQgNi43NjZ6bS0uMS0yaC4wOTFhNC43IDQuNyAwIDAgMCA0LjU3My00Ljc2NnYtLjUxN2E0LjcgNC43IDAgMCAwIC00LjU3OS00Ljc2NmgtLjEwOGE0LjY5NCA0LjY5NCAwIDAgMCAtNC41NzMgNC43NjZ2LjUxN2E0LjcgNC43IDAgMCAwIDQuNTczIDQuNzY2eiIvPjxwYXRoIGQ9Im00OC45MjggNjIuNzEzaC0yMy44NTdhMSAxIDAgMCAxIDAtMmgyMy44NTdhMSAxIDAgMCAxIDAgMnoiLz48cGF0aCBkPSJtNDUuNzUgNjUuODkxYTEgMSAwIDAgMSAtLjcwNy0xLjcwN2wyLjQ3MS0yLjQ3MS0yLjQ3MS0yLjQ3YTEgMSAwIDAgMSAxLjQxNC0xLjQxNGwzLjE3OCAzLjE3N2ExIDEgMCAwIDEgMCAxLjQxNGwtMy4xNzggMy4xOGExIDEgMCAwIDEgLS43MDcuMjkxeiIvPjxwYXRoIGQ9Im0yOC4yNDkgNjUuODkxYTEgMSAwIDAgMSAtLjcwNy0uMjkzbC0zLjE3OC0zLjE3OGExIDEgMCAwIDEgMC0xLjQxNGwzLjE3OC0zLjE3N2ExIDEgMCAxIDEgMS40MTQgMS40MTRsLTIuNDcxIDIuNDcgMi40NzEgMi40NzFhMSAxIDAgMCAxIC0uNzA3IDEuNzA3eiIvPjxwYXRoIGQ9Im0zNyAyOS44MzhhMTIuMjUgMTIuMjUgMCAxIDEgMTIuMjUtMTIuMjUgMTIuMjYzIDEyLjI2MyAwIDAgMSAtMTIuMjUgMTIuMjV6bTAtMjIuNWExMC4yNSAxMC4yNSAwIDEgMCAxMC4yNSAxMC4yNSAxMC4yNjIgMTAuMjYyIDAgMCAwIC0xMC4yNS0xMC4yNXoiLz48cGF0aCBkPSJtMzQuODU3IDIyLjA3YTEgMSAwIDAgMSAtLjcwNy0uMjkzbC0yLjY3OC0yLjY3N2ExIDEgMCAwIDEgMS40MTQtMS40MTRsMS45NzEgMS45NzEgNi4yNTctNi4yNTdhMSAxIDAgMCAxIDEuNDE0IDEuNDE0bC02Ljk2NCA2Ljk2NGEuOTkzLjk5MyAwIDAgMSAtLjcwNy4yOTJ6Ii8+PC9zdmc+"
                                style="border-radius:5%;" alt="/" height="100" width="200" />
                        </div>
                        <div class="text mt-3">
                            <div class="meta mb-2 text-center">
                                <div>
                                    <h3><a href="#" style="color: #ff8811;"><b>Menjaga Jarak</b></a><h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Prestigious City</strong></h1>
                    <span class="subheading" style="color: #ff8811;">Rekomendasi lokasi yang dapat anda kunjungi</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @if ($galeri->count() > 0)
                    @foreach ($galeri as $g)
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <div class="img text-center">
                                    <img src="{{ asset($g->nama_galeri) }}" style="border-radius:5%;"
                                        alt="/" height="200" width="300">
                                </div>
                                <div class="text mt-3">
                                    <h3 class="heading text-center"><a href="#">{{ $g->nama_lokasi }}</a></h3>
                                </div>
                                <p class="text-center"><a href="{{ route('detail.wisata', ['id' => $g->id_lokasi]) }}"
                                        class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text mt-3">
                        <h3 class="heading text-center"><a href="#">Belum ada data</a></h3>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
