 <h3>TOUCH WITH ME</h3>
            <p class="sp">You can contact us through this form for any kind of query or complaint</p>
            <div class="formContainer">
                <form action="emailcode.php"method="POST">
                    <section class="formSection1">
                        <div class="formGroup">
                            <label>Name</label>
                            <input required type="text"placeholder="Name">
                        </div>
                        <div class="formGroup">
                            <label>Email id</label>
                            <input required name="email"type="text"placeholder="email">
                        </div>
                        <div class="formGroup">
                            <label>Mobile no.</label>
                            <input type="text"placeholder="mobile">
                        </div>
                    </section>
                    <section class="formSection2">
                        <div class="formGroup">
                            <label style="text-align: left;">Message</label><br>
                            <textarea name="emessage" required rows="6">
                            </textarea>
                        </div>
                        <div class="formGroup">
                            <input name="esend"type="submit"value="Send Message">
                        </div>
                    </section>
                    
                </form>
            </div>