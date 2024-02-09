<!doctype html>
<html lang="en">

<head>
    <title>Regester</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrapp.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script
        nonce="75ec9495-cc9d-4ecf-a800-163512eff9dd">(function (w, d) { !function (f, g, h, i) { f[h] = f[h] || {}; f[h].executed = []; f.zaraz = { deferred: [], listeners: [] }; f.zaraz.q = []; f.zaraz._f = function (j) { return function () { var k = Array.prototype.slice.call(arguments); f.zaraz.q.push({ m: j, a: k }) } };
         for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l); f.zaraz.init = () => { var m = g.getElementsByTagName(i)[0], n = g.createElement(i), o = g.getElementsByTagName("title")[0]; o && (f[h].t = g.getElementsByTagName("title")[0].text); f[h].x = Math.random(); f[h].w = f.screen.width; f[h].h = f.screen.height; f[h].j = f.innerHeight; f[h].e = f.innerWidth; f[h].l = f.location.href; f[h].r = g.referrer;
         f[h].k = f.screen.colorDepth; f[h].n = g.characterSet; f[h].o = (new Date).getTimezoneOffset(); if (f.dataLayer) for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({ ...t[1], ...u[1] }))))) zaraz.set(s[0], s[1], { scope: "page" }); f[h].q = []; for (; f.zaraz.q.length;) { const v = f.zaraz.q.shift(); f[h].q.push(v) } n.defer = !0;
         for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => { try { f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x)) } catch { f[h]["z_" + x.slice(7)] = w.getItem(x) } }));
         n.referrerPolicy = "origin"; n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h]))); m.parentNode.insertBefore(n, m) };["complete", "interactive"].includes(g.readyState) ? zaraz.init()
         : f.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);
    </script>
</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg.webp);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Buy</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Enter your data</h3>
                        <form action="insert2.php" method="post" class="signin-form" enctype="multipart/form-data">
                            
                            <div class="form-group">
                            Firstname:<input type="text" name='fir' class="form-control" placeholder="Enter your first name" >
                            </div>
                            
                            <div class="form-group">
                            Lastname:<input type="text" name='last' class="form-control" placeholder="Enter your last name" >
                            </div>
                           
                            <div class="form-group">
                            Username:<input type="text" name="User" class="form-control" placeholder="Enter username" required>
                            </div>
                            
                            <div class="form-group">
                                Password:<input type="password" name="pass" class="form-control" placeholder="Enter password" required>
                            </div>
                            
                            <div class="form-group">
                             Rewrite password:<input id="password-field" name="pass2" type="password" class="form-control" placeholder="Repassword" required>
                            </div>
                                   
                            <div class="form-group">
                            City:<input type="text" name="City" class="form-control" placeholder="Enter city" required>
                            </div>
                            

                            <div class="form-group">
                            Zip:<input type="text" name="Zip" class="form-control" placeholder="Enter zip" required>
                            </div>
                           

                            <div class="form-group">
                            Product Datils:<input type="text" name="pdatil" class="form-control" placeholder="Enter product Datils" required>
                            </div>
                            
                            <div class="form-group">
                            Email:<input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                            Phone number:<input type="number" name="phone" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                            Gender:<input type="text" name="gender" class="form-control" placeholder="Enter your gender" required>
                            </div>
                            <div class="form-group">
                            Personal photo:<input type="file" name="file" class="form-control" id="file" placeholder="select your photo" required>
                            </div>


                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="col-12">
                        <div class="form-check">
                         <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required />
                         <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                        </div>
                        

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3" >Go</button>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"796574a2fca8d1d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>