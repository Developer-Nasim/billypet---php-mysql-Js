<?php
    include_once "header.php";
?>
       
        <!-- billyPet -->
        <div class="billyPet">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="title mb-0">
                            <img src="assets/img/logo.png" alt="">
                            <h3>BillyPetPrints</h3> 
                            <p>The information you provide below will need to match with the order you placed.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="choseSteps mt-5">
                            <div class="choseSteps_head">
                                <h4>What did you order?</h4>
                                <p>It’s important that you select the correct form</p>
                            </div>
                            <div class="choseSteps_bottom">
                                <a href="#first_form">
                                    <div>
                                        <img src="assets/img/stp.png" alt="">
                                    </div>
                                    <p>Pet Potraits</p>
                                </a>
                                <a href="#second_form">
                                    <div>
                                        <img src="assets/img/stp2.png" alt="">
                                    </div>
                                    <p>Faceless Potraits</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form class="form first_form" action="incs/form.inc.php" method="post" enctype="multipart/form-data">
                            <span style="color: red;" class="d-block mt-5">The information you provide below will need to match with the order placed.</span>
                            <p>Please provide your email address. Preferably the same one as your order (makes it easy for us to locate your order). <b>*</b></p>
                            <label for="#">
                                <input type="text" placeholder="Your name" name="name" id="" required>
                                <input type="text" placeholder="Your email address" name="email" id="" required>
                            </label>
                            <p>How many pets are in your order? <b>*</b></p>
                            <div class="flexContents">
                                <label for="r1">
                                    <input type="radio" value="1" name="pets" id="r1" required>
                                    <span>1</span>
                                </label>
                                <label for="r2">
                                    <input type="radio" value="2" name="pets" id="r2" required>
                                    <span>2</span>
                                </label>
                                <label for="r3">
                                    <input type="radio" value="3" name="pets" id="r3" required>
                                    <span>3</span>
                                </label>
                                <label for="r4">
                                    <input type="radio" value="4" name="pets" id="r4" required>
                                    <span>4</span>
                                </label>
                                <label for="r5">
                                    <input type="radio" value="5" name="pets" id="r5" required>
                                    <span>5</span>
                                </label>
                                <label for="r6">
                                    <input type="radio" value="6" name="pets" id="r6" required>
                                    <span>6</span>
                                </label>
                            </div>
                            <p>What did you order? <b>*</b></p>
                            <div class="withOrderFlex">
                                <label for="f1">
                                    <input type="radio" name="order" id="f1" value="Digital File" required>
                                    <span>Digital File</span>
                                </label>
                                <label for="f2">
                                    <input type="radio" name="order" id="f2" value="Print Only (No Frame)" required>
                                    <span>Print Only (No Frame)</span>
                                </label>
                                <label for="f3">
                                    <input type="radio" name="order" id="f3" value="Framed Print" required>
                                    <span>Framed Print</span>
                                </label> 
                            </div>
                            <p>What size did you choose? Or what size would you like for the Digital File (if purchased) option? <b>*</b></p>
                            <select name="size" id="" required>
                                <option value="">Select Size</option>
                                <option value="A5">A5</option>
                                <option value="A4">A4</option>
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="8x10">8x10</option>
                                <option value="12x16">12x16</option>
                                <option value="18x24">18x24</option>
                            </select>
                            <p>Choose your background color: <b>*</b></p>
                            <div class="csClr">
                                <label for="c1">
                                    <input type="radio" name="clr" id="c1" value="white" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC.png" class="bgc" alt="">
                                </label>
                                <label for="c2">
                                    <input type="radio" name="clr" id="c2" value="eggshell" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC2.png" class="bgc" alt="">
                                </label>
                                <label for="c3">
                                    <input type="radio" name="clr" id="c3" value="olive" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC3.png" class="bgc" alt="">
                                </label>
                                <label for="c4">
                                    <input type="radio" name="clr" id="c4" value="nevada" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC4.png" class="bgc" alt="">
                                </label>
                                <label for="c5">
                                    <input type="radio" name="clr" id="c5" value="black" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC5.png" class="bgc" alt="">
                                </label>
                                <label for="c6">
                                    <input type="radio" name="clr" id="c6" value="navy" required>
                                    <img src="assets/img/tick.png" class="tick" alt="">
                                    <img src="assets/img/bgC6.png" class="bgc" alt="">
                                </label>
                            </div>
                            <p>Before you upload photos, please read: <b>*</b></p>
                            <ul>
                                <li>
                                    <img src="assets/img/icons/icon.svg" alt="">
                                    Photos taken in natural light i.e. no filters is preferred for best result
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon2.svg" alt="">
                                    The direction your pet is looking will be the same in our illustration (we can't change direction) see below example 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon3.svg" alt="">
                                    The better the photo the better the illustration will be 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon4.svg" alt="">
                                    We do not combine different photos of the same pet. Please DO NOT upload multiple photos of same pet  
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon5.svg" alt="">
                                    Please provide one good photo per pet 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon6.svg" alt="">
                                    We do not judge the quality of your photo (unless it's very poor in quality) 
                                </li>
                                <li>
                                    <label for="ckb" class="ckb">
                                        <input type="checkbox" name="i_agree" id="ckb" value="yes" required>
                                        <span></span>
                                        I Have read and understood the terms above agree with it.
                                    </label>
                                </li>
                                <span>To continue, you must read the terms first and aggre with that.</span>
                            </ul>
                            <img src="assets/img/image.png" class="bigImg" alt="">
                            <p>Upload your pet photo <b>*</b></p>
                            <label for="#petfileUp" class="fileUpload">
                                <input type="file" name="petFile[]" id="petfileUp" accept=".png,.jpg,.jpeg" multiple required>
                                <img src="assets/img/icons/gallery.png" alt="">
                                <p>Drop your image here, or <b>browse</b></p>
                                <span>Supports: JPG, PNG, JPEG</span>
                            </label>
                            <label for="#namepets">
                                <input type="text" placeholder="Name of the pet" name="namepets" id="namepets" required>
                            </label>
                            <p>Add poster/pet name. Leave empty if you don't want to add any names</p>
                            <label for="#" class="mb-3 doneThat"> 
                                <div class="rdoBtn name_giving_permision" style="cursor:pointer">
                                    <span class="radio"></span>
                                    No Name 
                                    <input type="hidden" class="d-none" name="ptNms">
                                </div>
                                <input type="text" placeholder="e.g. Boots & Sam" name="petname" id="">
                                <img src="assets/img/image2.png" alt="">
                            </label> 
                            <p>Any other instruction? <b>*</b></p>
                            <label for="#">
                                <input type="text" placeholder="E.g. remove collar" name="introduction" id="" required>
                            </label> 
                            <button type="submit">
                                Submit 
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.43 19.082C14.24 19.082 14.05 19.012 13.9 18.862C13.61 18.572 13.61 18.092 13.9 17.802L19.44 12.262L13.9 6.72196C13.61 6.43196 13.61 5.95196 13.9 5.66196C14.19 5.37196 14.67 5.37196 14.96 5.66196L21.03 11.732C21.32 12.022 21.32 12.502 21.03 12.792L14.96 18.862C14.81 19.012 14.62 19.082 14.43 19.082Z" fill="white"/>
                                    <path d="M20.33 13.012H3.5C3.09 13.012 2.75 12.672 2.75 12.262C2.75 11.852 3.09 11.512 3.5 11.512H20.33C20.74 11.512 21.08 11.852 21.08 12.262C21.08 12.672 20.74 13.012 20.33 13.012Z" fill="white"/>
                                </svg>
                            </button>
                        </form>
                        <form class="form second_form" action="welcome.php" method="post" enctype="marlitpart/form-data">
                            <span style="color: red;" class="d-block mt-5">The information you provide below will need to match with the order placed.</span>
                            <p>Please provide your order email address. Preferably the same one as your order (makes it easy for us to locate your order). </p>
                            <label for="#">
                                <input type="text" placeholder="Your name" name="" id="" required>
                                <input type="text" placeholder="Your email address" name="" id="" required>
                            </label>
                            <p>How many characters are in your order?</p>
                            <div class="flexContents">
                                <label for="r1">
                                    <input type="radio" name="pets" id="r1">
                                    <span>1</span>
                                </label>
                                <label for="r2">
                                    <input type="radio" name="pets" id="r2">
                                    <span>2</span>
                                </label>
                                <label for="r3">
                                    <input type="radio" name="pets" id="r3">
                                    <span>3</span>
                                </label>
                                <label for="r4">
                                    <input type="radio" name="pets" id="r4">
                                    <span>4</span>
                                </label>
                                <label for="r5">
                                    <input type="radio" name="pets" id="r5">
                                    <span>5</span>
                                </label>
                                <label for="r6">
                                    <input type="radio" name="pets" id="r6">
                                    <span>6</span>
                                </label>
                            </div>
                            <p>What did you order?</p>
                            <div class="withOrderFlex">
                                <label for="f1">
                                    <input type="radio" name="order" id="f1">
                                    <span>Digital File</span>
                                </label>
                                <label for="f2">
                                    <input type="radio" name="order" id="f2">
                                    <span>Print Only (No Frame)</span>
                                </label>
                                <label for="f3">
                                    <input type="radio" name="order" id="f3">
                                    <span>Framed Print</span>
                                </label> 
                            </div>
                            <p>What size did you choose? Or what size would you like for the Digital File (if purchased) option?</p>
                            <select name="" id="" >
                                <option value="">Select Size</option>
                            </select>
                            <p>Choose your background color:</p> 
                            <div class="flexContents slClr">
                                <label for="cr1">
                                    <input type="radio" name="bgClrs" id="cr1">
                                    <span>1</span>
                                </label>
                                <label for="cr2">
                                    <input type="radio" name="bgClrs" id="cr2">
                                    <span>2</span>
                                </label>
                                <label for="cr3">
                                    <input type="radio" name="bgClrs" id="cr3">
                                    <span>3</span>
                                </label>
                                <label for="cr4">
                                    <input type="radio" name="bgClrs" id="cr4">
                                    <span>4</span>
                                </label>
                                <label for="cr5">
                                    <input type="radio" name="bgClrs" id="cr5">
                                    <span>5</span>
                                </label>
                                <label for="cr6">
                                    <input type="radio" name="bgClrs" id="cr6">
                                    <span>6</span>
                                </label>
                            </div>
                            <p>Before you upload photos, please read:</p>
                            <ul>
                                <li>
                                    <img src="assets/img/icons/icon.svg" alt="">
                                    Photos taken in natural light i.e. no filters is preferred for best result
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon2.svg" alt="">
                                    The direction your pet is looking will be the same in our illustration (we can't change direction) see below example 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon3.svg" alt="">
                                    The better the photo the better the illustration will be 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon4.svg" alt="">
                                    We do not combine different photos of the same pet. Please DO NOT upload multiple photos of same pet  
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon5.svg" alt="">
                                    Please provide one good photo per pet 
                                </li>
                                <li>
                                    <img src="assets/img/icons/icon6.svg" alt="">
                                    We do not judge the quality of your photo (unless it's very poor in quality) 
                                </li>
                                <li>
                                    <label for="ckb" class="ckb">
                                        <input type="checkbox" name="" id="ckb">
                                        <span></span>
                                        I Have read and understood the terms above agree with it.
                                    </label>
                                </li>
                                <span>To continue, you must read the terms first and aggre with that.</span>
                            </ul> 
                            <p>Upload your reference photo: </p>
                            <label for="#" class="fileUpload">
                                <input type="file" name="" id="" accept="png,jpg,jpeg">
                                <img src="assets/img/icons/gallery.png" alt="">
                                <p>Drop your image here, or <b>browse</b></p>
                                <span>Supports: JPG, PNG, JPEG</span>
                            </label> 
                            <p>Anything else to note? </p>
                            <label for="#">
                                <input type="text" placeholder="E.g. remove collar" name="" id="">
                            </label>
                            <button type="submit">
                                Submit 
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.43 19.082C14.24 19.082 14.05 19.012 13.9 18.862C13.61 18.572 13.61 18.092 13.9 17.802L19.44 12.262L13.9 6.72196C13.61 6.43196 13.61 5.95196 13.9 5.66196C14.19 5.37196 14.67 5.37196 14.96 5.66196L21.03 11.732C21.32 12.022 21.32 12.502 21.03 12.792L14.96 18.862C14.81 19.012 14.62 19.082 14.43 19.082Z" fill="white"/>
                                    <path d="M20.33 13.012H3.5C3.09 13.012 2.75 12.672 2.75 12.262C2.75 11.852 3.09 11.512 3.5 11.512H20.33C20.74 11.512 21.08 11.852 21.08 12.262C21.08 12.672 20.74 13.012 20.33 13.012Z" fill="white"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- billyPet -->

 

<?php
    include_once "footer.php";
?>