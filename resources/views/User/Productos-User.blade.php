<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

body, html {
    margin: 0;
    padding: 0;
    background-image: url('/resources/img/home/low-poly-grid-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 100vh;
}

.hiddenX{
    overflow-x: hidden;
}

.vertical-separator {
            display: inline-block;
            width: 1.5px;
            height: 30px;
            background-color: #C8A096;
            margin: 3px 15px;
            vertical-align: middle;
}

/* ANIMACION DE CARGA */
#contenedor_carga{
        background: #ffffff url(/resources/img/home/preloader.gif) no-repeat center center;
        background-size: 20%;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
    }



/* Aquí tus estilos */
  @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Ubuntu';
    max-width: 1200px;
    margin: 0 auto;
  }

  img {
    max-width: 100%;
  }

  header {
    display: flex;
    align-items: center;
    padding: 30px;
    justify-content: center;
  }

  .container-title {
    padding: 30px;
    background-color: #eee;
    margin-bottom: 50px;
    color: #222;
  }

  main {
    display: flex;
    gap: 30px;
    margin-bottom: 80px;
  }

  .container-img {
    background-color: #f7f7f9;
    flex: 1;
  }

  .container-info-product {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .container-price {
    padding-bottom: 20px;
    border-bottom: 1px solid #e4e4e4;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .container-price span {
    font-size: 24px;
    font-weight: 300;
  }

  .container-details-product {
    padding: 30px 0;
  }

  .form-group {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 15px;
  }

  .form-group label {
    width: 100px;
    color: #222;
    font-weight: 700;
  }

  .form-group select {
    width: 300px;
    border: none;
    padding: 12px 15px;
    background-color: #f7f7f7;
    outline: none;
    color: #666;
  }

  .btn-clean {
    border: none;
    background: none;
    color: #666;
    margin-left: 120px;
    cursor: pointer;
  }

  .btn-clean:hover {
    color: #1bbeb4;
  }

  .container-add-cart {
    display: flex;
    gap: 20px;
    padding-bottom: 30px;
    border-bottom: 1px solid #e4e4e4;
  }

  .container-quantity {
    position: relative;
  }

  .input-quantity {
    background-color: #f7f7f7;
    border: none;
    padding: 10px;
    width: 60px;
    height: 100%;
    color: #666;
    font-weight: 500;
    line-height: 0;
  }

  .input-quantity:focus {
    outline: none;
  }

  .input-quantity::-webkit-inner-spin-button,
  .input-quantity::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
  }

  .btn-increment-decrement {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 7px;
    right: 7px;
  }

  .btn-increment-decrement i {
    font-size: 11px;
    color: #666;
    cursor: pointer;
  }

  .fa-chevron-down:hover {
    color: #1bbeb4;
  }

  .fa-chevron-up:hover {
    color: #1bbeb4;
  }

  .btn-add-to-cart {
    border: none;
    background-color: #252525;
    padding: 10px;
    color: #f7f7f7;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    font-weight: 700;
    cursor: pointer;
  }

  .btn-add-to-cart:hover {
    color: #1bbeb4;
  }

  .hidden {
    display: none;
  }

  .container-description,
  .container-additional-information,
  .container-reviews {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #e4e4e4;
    padding: 10px 0;
  }

  .title-description,
  .title-additional-information,
  .title-reviews {
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
  }

  .title-description h4,
  .title-additional-information h4,
  .title-reviews h4 {
    font-weight: 300;
    color: #666;
    font-size: 14px;
  }

  .text-description,
  .text-additional-information,
  .text-reviews {
    font-size: 13px;
    color: #252525;
    line-height: 22px;
    margin-top: 25px;
  }

  .container-social {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    align-items: center;
    border-bottom: 1px solid #e4e4e4;
  }

  .container-social span {
    font-weight: 300;
    color: #252525;
  }

  .container-buttons-social {
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .container-buttons-social a:link,
  .container-buttons-social a:visited {
    color: #666;
    font-size: 15px;
  }

  .container-buttons-social a:hover {
    color: #1bbeb4;
  }

  .container-related-products h2 {
    text-align: center;
    margin-bottom: 30px;
  }

  .card-list-products {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
  }

  .card {
    cursor: pointer;
  }

  .card-img {
    background: transparent;
    margin-bottom: 15px;
  }

  .card-img img {
    height: 400px;
    object-fit: cover;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
  }

  .info-card {
    display: flex;
    justify-content: space-between;
  }

  .text-product {
    color: #252525;
    font-weight: 300;
    line-height: 1.4;
  }

  .text-product h3{
      color: inherit;
      font-weight: inherit;
      font-size: 15px;
  }

  .text-product h3:hover{
      color: #1bbeb4;
  }

  .text-product p{
      color: #666;
      font-size: 13px;
  }

  .text-product p:hover{
      color: #1bbeb4;
  }

  footer {
    padding: 30px;
    background-color: #eee;
    margin-top: 50px;
    color: #222;
  }



    </style>
</head>
<body class="hiddenX">


    <!-- NAVBAR / ENCABEZADO -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/Home-usuario">
            <img src="/resources/img/dashboard-navbar/Letras Tutti.png" alt="Tutti Belli Studio" width="300" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
              <li class="nav-item">
                <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#servicios" style="color: #C8A096;">Servicios</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Productos-User" style="color: #C8A096;">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#cursos" style="color: #C8A096;">Cursos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active texto1" aria-current="page" href="/Home-usuario#contacto" style="color: #C8A096;">Contacto</i></a>
                  </li>
                  <span id="separador" class="vertical-separator"></span>
                  <li class="nav-item" style="margin-left: 0;">
                    <a class="nav-link active texto1" aria-current="page" href="/Perfil-User" style="color: #C8A096;">Cuenta <i class="fa-solid fa-user" style="margin-left: 10px;"></i></a>
                  </li>
                  <li class="nav-item" style="margin-left: 100px;">
                    <a class="nav-link active texto1" aria-current="page" href="/Logout" style="color: #C8A096;">Cerrar sesión<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 10px;"></i></a>
                  </li>
                </ul>
                <a href="/Reservacion-User">
                  <button class="btn btn-light ms-auto" type="button">Reservar cita</button>
                </a>
            </div>
        </div>
    </nav>






    {{-- Aquí tu código papi --}}
    <div class="container-items">
			<div class="item">
				<figure>
					<img
						src="https://th.bing.com/th/id/OIP.dqEaveuPUSIwiX__sdqlMQHaHa?rs=1&pid=ImgDetMain"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Lapiz delineador</h2>
					<p class="price">$80</p>
					<button>Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://th.bing.com/th/id/OIP.pqRSM7V9uwI6V5dMnBhKRAHaH8?w=173&h=186&c=7&r=0&o=5&pid=1.7"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Kit permanente de pestañas</h2>
					<p class="price">$140</p>
					<button>Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://th.bing.com/th/id/OIP.h3MtZiQVQFbtHwymqspLEgHaHa?w=206&h=207&c=7&r=0&o=5&pid=1.7"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Kit lapiz labiales</h2>
					<p class="price">$90</p>
					<button>Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="data:image/jpeg;base64,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"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>crema hidratante</h2>
					<p class="price">$90</p>
					<button>Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAC4ALwDASIAAhEBAxEB/8QAHAABAAMBAQEBAQAAAAAAAAAAAAUGBwQDAQII/8QAOhAAAgEDAwMDAgMGBQMFAAAAAQIDAAQRBRIhBhMxIkFRFEIyYXEHFSOBkaEWJFJisTNDkjRysvDx/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAERMf/aAAwDAQACEQMRAD8A1ulK+E4oPtKz7VuvEluJbPRJI+3ExSS+ZQ/ccHBFsrenb/uIOfYYwxiLbqvXdLuRdS3sl7ZOcXNteSJ4/wBUEpGVYew8H491uJrWKVVf8fdIfSi6+qnB3Qo0LW0qzIZW2ruJHbx5Od/gHzivth130tqd3HYWM1xNeS3EMEMIiAMofl5UYtt2oMs/OcKcA+DFWmlQg1xJ57G3tRA09z9RKkEkq96W3UMIpVVMlVYbZCWHCkDBZwtSFteQS7YDdWkt5EhFyls4IWWMqkuFJLAAnHJ/LzQddKUoFKUoFKUoFKUoFKUoFKUoFKUoFKUoFUv9oOqT2mmRadbsyyan3VndTgi1jADoMc+skA/ln5q6VTuv7ax/dSajM+24s5O1bIfFwZiMxHHjxuz7BT88BiY+re4MNuMN5Y5Coijjc7eAKlo47GLvwzzvPep6H9PcnWLtd2ZrS3JABC5ALHOecDaSOOWS/wBPzcGOJ+4ILqOZH5ilVwxDoMpyMqoOQPbkc/hbu4gl/wAq0WTrEczXE6o9wr3KEGPdFk7MA78Yz4xwa0ylJryCETN2oTdCCF4lupYHaaa9RD23S452xRejBHufBYCoS4gjtbp7nTJ8LDI/YaKWN5SY0/iSgIc9vOQPyP3VLBdi3sfetPrR9bp1xHbOqQpLJIZzcxuEaRsKDwATxj/a3MVleOOQsGgubFJNoFyUNrBNhIS+5TuZ1HPHPvUWPSz1+4SKa5+rmGrSX8c8qonYN7GAzSfVXaHulMAIsalR6vBxWm9MazLPYaXcTm1hvZZ5u5apcQw/UxhC7TyRD1AAZ7a+kABpDnPGO3dnKgF1HkEiGWQR5UxSygyiJFZi3pBGalNH1HTZL6bWtauLiS8sZILiC2ttsL3jRoIYrdJF/CAdgIA4VW98AxX9B2Vw89tbSTDZNJlGDRvDuddwJSOUlwDgsueccnHt1VnfTet32qQPqdzZLb3aami7kC4vWkVN4tjMrNnZtDnBJARFxnIvNhdm8heUrtKzSxHCybDtbjY7qAwxgFhkZBwSBmg66UpQKUpQKUpQKUpQKUpQKUpQKUpQKzn9pNy9vN0uZomfT+5fSTlQSBIixlcj3wPVjyQrY8YrRqp3XGtSabYXFqlsLiW+t1htY4oGuZhNK5hDyo6dpVBKhCSxYkgKNpYBlGp2NnLPutrfLzxCS2bvKkN3Gygs0TAbSV8FTg455+2DcXFp3SltdRLOioouFZWVw+7chZcEjkK2ON3z5kPpP3atvJqlvKRcx3C26wzOl1C1tIVW4iBwApbIUkfaSOPPv9HLcQ96e3voCiq0j2wQpcQSq2GEZft54G8A+/wcLU45O7HaxXl1a20Ykb9331nLtCmwQHZtzncWJ9IHuAWPmpQwCSeae6tIhJATLJbKI7qSW1mg2WzwPKdoGc8YHJHH2muBobeaTYXkTZLFLDPEVYeAqOpOeCFPB9v6yEXYlM17Okk7T2e+ErK6znULch5GY5ChVALHggDaByaD2jici0CJb9x/qrNHWSImS5kGJZWaGEgbQfR6vbPOfVH3NiTGLm3jfsOJWVMvL24onEW922L+Ign8I85/ITSm4v1gkaKS3RuxK0TvLFBMtzl7me2W15LEAA5z5xjI21yyLaoO8YZGtY7pZXd0WBZLVAxht1WS43ZcZJ4z44OeQ9rO8PUF3a/vrVVsodLtkeJ0BRu1GxnmkiAOO4w3NnyTtUDxs0jQuorTqCbULpLe7tE0w2t1HG5SZp4YS0UMUbSExhiSVPxuJzlgYchvLJlEzAPujk7FwXEP/qShlZV7LFeB/wAfORU7YatqmvDR9A+rSxggiczy2ziOW6EEeIo0UFQXAGI1B5Z2Y8sSpW8Wd6l2bldoR4HQNGXDSqkiCRDKoGFZhyFyTjB+7A7KoOl6/b6zcpo1lerNfWll6njE0Wn3V1FKplnYq4kYB1DHDeoHG4CRttxtNRtLySSKFmcxqT3CojSZkdopOyrHeQpAyduPUMEnO2DtpSlApSlApSlApSlApSlApSlAqv3+nJbpI8ZnaOaVmOZAqwO5eW4u7q6ncsAUHbVgMoDhQM+iwUxQYnrGiWOmXNxr2s3Fze24YJYWq2T2sNzPHbhoo3bu7lhVShGC2QCCdymq3ZyXsUNneXM17a6RNNdW9s1pPsVGXDMVhbc7IC2PBGeM8cbfqumFxcd57u6t76VI5oI4lmnlDypttA23tpbYDb8geclsj1Z1reizXmp3Wsaxen/Dum9m3heCGQtcJCi3H0doyKiBDkoJcKpPgZ4qiql5b4CP6x1YbmiNxasYbuLODIke0sCONwGceQcfgjFZba5jzcxzW2TFMI2kcGGU5lBRgG/Px5A9xUlFNeXUYVe/baNHejbLs+o+lmKhgqTkBhtyPGMbuc5wf1MIrszwRvps95EhPdEaqlzGi4LpKu1lb/WCcDHBwfSR5QN9RLZsbq5gsIrS8tXkiKgWcIB2R4CklnON3A3FsD8NdKzJdpKLKGRLhl+ruYe1Gs1wbNhFGwmmVlDfcwUcncPPFRTLfac6OO0Y0niuSI5IpY+5EAFG9SeQCcfrnzUgskoTT7axmY2qaxGkZ2GR5Z7jJJfLD0qPSoyN2GPHgB+5lcPeQW11PJKTEsTQyXE4aaUq9xJO8EZQleFOCfPv5EbeWsXcaWzD9ob5Yt8U0bLBu2RuWfyWx8858ZqXLQSLcwpcQXd7JE+nzFnIguJHlaR5bW3jOWZRtweASOMnAKO2u5VWVUYQzaf9SSbS2iT6eyOIoWWUtjJUEk5z+Y5A180jW7+K203RtJ06zg1Weea3/eHoNxI92TEHV5OFKqWjBzgBm92yNL03WPoY9C0Z7u1m6ivAyFoIg0z2Sq8tuGRgFjLLhwDwPJBL+rJL7SbqEPOIZMRxLNdY7YaFn2l96oABtLKp+c+xBAvf7Ota0OxkvF1iD6fVr2Ysur3pdnvBKw/hO8uWU5Oc8BvfBHqitXtFuktbVLt0e5WGNZ2jJKtIFAYgsAT+uB+g8D3pSgUpSgUpSgUpSgUpSgUpSgUpSgEAggjg8Gq9rejNqEE9vc3FlHpKpGWEsSqljbwKGdkVj2yx5w5ICAcKTljYa/MiRyo8ciK8bqVdHUMrA+xB4oMe17Rb6+vrbRNH+jstAt7SCWSZkWKC1tjK3bmn3M0peQ+MkGQqCRhARWBe/RTSW+jhLq0j2N3r2DCQmYYIcqBg/afGSCACADW1avps81td2MFrHJY3+/vxiSZZJrq4kd3e7mDhxAvBIRtx4UbVGHoGv6RJoUVn0305p8ly2rXDxT3jukjSXUybRFMO0FUxpuKevCq7MQC242CpXFtazyPus7c3jI7xrZzvGlwnDAx7/uXnuK4zwDyPwxCi+se6Ta3ES3MQg/jI6Myl9zFTgDJA25HsfzqYv9Ot9Bmt4ZmS6luoI7hRF3YLuI7iI5MSDdGxI3x5BJUjcozhfSPTZ9RthdTS3EGXYSGORZIpc+XeHcQpzkOPGRwADhScdWg2qym41Dtxqs8lrcWJMSEwCIvE8a5HgY2jnxg+amrj6K3gP1EjrGYWth6syMjPv2oAOT7DjxVetBf6BMELrJpV20kdtLP6YIrsAYV3J9I5AY8jnPsdv2WS5aeU3ZcXKMyOsgwYiOCir7VWa7JbuaZpzEDbpMzGTYxM8oLmTDyewyTgD58+w42hVQSowSckj8RPyT5r4HHzX735HzQaf0N1DJqdtLpt4+69sI1aN2/FPa52hm/3KcA/qD71cqxjolpE6s0vaSFlgv4pMeGXsNJj+qg/yrZ6lahSlKilKUoFKUoFKUoFKUoFKUoFKUoFV66sLPSl7tnZTySSxS2YucvObC3lCArGgbvHe2DgZJYlmYDLCw0oMjutD0fpK0udY1s3d7c311cxrYXRFxNPDhhHDLcxtsG5gskj4JIUKBnIeG0rTeorY2F1LEI7DUL36O4EaSSLbFTiSOUHLdyMZAznJUqTleNfXQrE3rX11JcXkqzSTWy3b74rYyLtIRFAU4527gducDGTu77i1t7mCS3kX+HIdx2YBDh+4GHHnPNXUqDtdG0uOxls5LWGSC5j7U0MoEidnJZYc/C+c/OW8nih9T9K3WnQGez7lxaWyAW7tlriOBeBa3BHJ2D/AKL/AANh5CFr7OmoaaxyrzWucrKgLFB8SqOR+o4/SvsWpQTggpvBBDBRuBB4IINEYMLst4/r8j8q7reYHGfNWHqrpFLWebVdJjY6fITLd2yqd9ix5Mir57JP/jn45FW2FDkVRN2lxc2V1aahaOEubWQSREglTwQVYDyrAkNz4NbFoOu2Ou2gng/hzx7Vu7ZjmSCQj+6n7Wxz+RBAw6Cf2NSVhfXum3UV9YS9u4j45yY5Iz+KOVcjKn3/AKjBGQpG7UqH0HXrLXbTvw/w7iLal3bMwLwOfHPup+045/IggTFZaKUpQKUpQKUpQKUpQKUpQKUpQKUpQKUpQK4LzR9G1BWS7soJN3lgDG//AJxEN/eu+lBSdQ6SvdPBvOl767jliy5028upJ7W4HukTzkurHwMsR7cZzVDvLG3vI7i8soHhlgZ11GwZdklpIn4ysfkKOdwxx5Hp4i3Kqx1F05JeyLq+kssGt26jnOyK+jTxDOR9w+xvbwePw3UsYowZDn+ddME/gH+9S+pWUN3FcahZwNbzW7vHq2nMuyS0mT8bonsvuw9vI9JxFXuVOfFVlPWV7eafcxXtjMYriPjOMpIh8xyL4Kn3H8+CMjVOnuqNP1xFhbbb6ki5ltWP48eXgY/iX+49x7nGYJgcA11qSrRyxuyyIyyRvGxR0cchlZTkEfOaYrfOKVneh9dPF27XXAzoMKl/EuWHt/mY1/8Ako/Ue9aBBPb3MUU9vLHLDKu6OSJldHX5Vl4rLT0pSlApSlApSlApSlApSlApSlApSlApSlApSlBVOptBnmca3pCAatbxhZ4VwBqVuo/6T547i/8AbJ/9p4Ppy/VLK3Mcepaep+huH2yRYKmzuCSDEynkKSDt+CCp8AvvdUDqvSk0ye41mGIPpeoMIdftgDtRpMILxQvgHgSY98N5GRYlZXkoa6oLj2NemqWDWFx2wxeCRe9ay8fxYSeM443Dw39fDDMcDtP/ABVZTa9tx59q7tM1jV9DlMthN/Cdg01tLlreb5JXPB/MYP6jgwMM5GM/kKkIZIpOCQcEZUHBP5bvaita0HqvSddCwqfptQCkvZzMN7bRktC+AGH6DPyB72GsLliiZVkiJieJgyFWKSRyLypDA5DfBB/oeBc+mOtmZ4dM16RVlYrHa37YVZSeFjufYOfZuAffB5eYsrQaUpUUpSlApSlApSlApSlApSlApSlApSlArzmhhnimgmRZIZo3iljcZV43BVlYfBFelKDIdT0c2N1P03duRA+676dvJDnCZx2ZG/2/hf8ALBxwKps0EsMssM0bRyxO0ciN+JXU4IOOK3XqbQo9e054FIjvbdvqNPn8GK4UcAsOdreG/kfK1lV1FJqkE0jxGPWtMBg1CAjEk0cWV3bf9SYP8gR9o3aZVrx+ng1+YGlgk9LZiIzliPR87ifn+/68n2deMivHaSQgVnMjLGqKCzOznaFVRySfYCgm4LqN1DnJI2xrhcsSTtCqBkknwB59qs8XRGpahZXMt3dfu+eaJvpLcRpK8bHwbxjnAPgqvIzknI2VUelOptH0rV7eXUbPdDl4o7tizvZM2FEyRDjOMhjy2DxjBEmp6l1JaRK0GlyQ3V0yqWnQiW1tlYBgSynDORghQcDOTjIV4K30Z1RrOl6oekeqDMZzKsOn3E7b2R2HohaQn1Rvx2jk+QOQRs1SsH6j083ifvESTNqIdCXYySS3e5woztGcqcbSAAPHHGNJ6H6k/fOmW8F5O0mpW0axzSTLFC1yRn1Rp3GdtoA3NtGfPvwxdW+lKVFKUpQKUpQKUpQKUpQKUpQKUpQKUpQKofWeh3EUq9TaSh+stVB1GJM/x4EAHdwvOVAAb8gD5T1XylBg9/a21zbtq9gALZstewjGbST7nwPsPv8ABPww22Xp3pqbTY7fWNQg23Vwn+URhzZRyD7x7SuPPwDt85z16v0kmm6m9/aE/ue6ZZJ7GMsoFyjiRV4GO3nLKM+RjxxUhf8AU8dvp6w74nv73dDaNJtOR900kZ+5ftGME4+DjTLO+utN0gagJNPGNQKmXVYogBCGbDIeP+6wyXA9sE4LeqE0jXLrT1NuUSa3OREkzmNYJGPncBnbnlh/THvJapCbQrIjGR7p5CiSuWlaTl5JHY8lR5Yn/wDK5MPMm4HfuO4jmQk5aVV9l9h/9wFk+rMLG/kmMrzoytMyhJL+NQQYbdJBiO1HuxGTjj4X06YuLx+rNOOiF4IZ722SUCKNnNqApkj9WTsCq3OQcc+TiqvAl5dPHBErSM7KuOT8lS5/0jk/A/51X9nS6Xp2oXFjeRqusT26mwn3Ew3FsigyxwbgCJARlx7jkcA5K1OlKVlSlKUClKUClKUClKUClKUClKUClKUClKUH4kjjlR45FDI42sreCKzXq3ou6YXOpWcklyiglrdYy0kMKLkKiR5LDOSSBuyfB8rptKD+bDclmlS97wmMccUySsRM8SKGSyViBt3HBkJOT+vDck1pcSu0hEbyMplMSEgABSc7UGQo+0e+P67jr3Q+k6xPHewMlleq+93SBXglLMWkeSFWTMjZ5bdnj+nVofSOlaNIbovJeagc4ubgKFiB4xbwr6VGOM8n86upjCW08wWtte21zvCASfUR8dqTztPvjPHj/nBnuntYW41TSbzU4Vaz0yeO5kjt9wl76g7bvbjJCedo/PGSADpk/wCz7pi41C4vGSZLW5Vmn06Jtlm9wQR3wq8g8ngHGef1zXqnpPW+nZ45rZJrizZttvd20bM+PIS5SMHDj5xg+Rg5VWjdYZYZ4opoJEkhlRZIpI2DI6MMhlYcYNelZ1+yu41KXTtaiuzP24b2I28cqsqxiSMs4jDDgE8kfJz786LUUpSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlB//Z"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>cepillo secador </h2>
					<p class="price">$50</p>
					<button>Añadir al carrito</button>
				</div>
			</div>
		</div>







    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24af5dc0df.js" crossorigin="anonymous"></script>

<script>
  const btnCart = document.querySelector('.container-icon')
  const containerCartProducts = document.querySelector('.container-cart-products')

  btnCart.addEventListener('click', () => {
      containerCartProducts.classList.toggle('hidden-cart')
  })

  

$(document).ready(function(){

  function separadorHidden(){
      var cuentaLi = document.getElementById("cuenta");
       var separador = document.getElementById("separador");
        if (window.innerWidth <= 992) {
          $('.vertical-separator').css('visibility', 'hidden');
        } else {
          $('.vertical-separator').css('visibility', 'visible');
        }
    }
    window.addEventListener('resize', separadorHidden);
    separadorHidden();



    // Scripts aquí

});


// Pantalla de carga
var loader = document.getElementById("contenedor_carga");
var navbar = document.getElementById("navbar");
window.addEventListener('load', function(){
    $('#navbar').css('visibility', 'visible');
    loader.style.display = "none";
})

</script>
</body>
</html>
