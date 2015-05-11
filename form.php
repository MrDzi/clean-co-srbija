 <form>
                        <div>
                            <div>
                                <label for="name">Ime i prezime<span>*</span></label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div>
                                <label for="email">E-mail<span>*</span></label>
                                <input type="email" id="email" required>
                            </div>
                        </div>

                        <div>
                            <div>
                                <label>Broj telefona<span>*</span></label>
                                <input type="text" id="phoneNumber" name="phoneNumber">
                            </div>
                            <div>
                                <label for="location">Lokacija<span>*</span></label>
                                <select class="form-control cleanco-scheduling-location" required>
                                  <option disabled selected></option>
                                  <option value="0">BOP</option>
                                  <option value="1">Đorđa Stanojevića</option>
                                  <option value="2">Vaša lokacija</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="customLocation" name="customLocation" placeholder="Upišite svoju lokaciju" enabled required>
                            </div>
                        </div>

                        <div>
                            <div data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                <label for="date">Datum<span>*</span></label>
                                <input type="text" required>
                            </div>
                            <div>
                                <label for="time">Vreme<span>*</span></label>
                                <select required>
                                  <option>09:00</option>
                                  <option>09:30</option>
                                  <option>10:00</option>
                                  <option>10:30</option>
                                  <option>11:00</option>
                                  <option>11:30</option>
                                  <option>12:00</option>
                                  <option>12:30</option>
                                  <option>13:00</option>
                                  <option>13:30</option>
                                  <option>14:00</option>
                                  <option>14:30</option>
                                  <option>15:00</option>
                                  <option>15:30</option>
                                  <option>16:00</option>
                                  <option>16:30</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="submit">Zakaži pranje</button>
                        </div>
                    </form>
