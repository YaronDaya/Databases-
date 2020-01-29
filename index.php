<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/proj.css" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/proj.js"></script>
  <title>Project table</title>
  </head>
  <body>
    <div id="warp">

  <div class="navi">
    <center> <h1>Welcome</h1></center>
      <div class="button_list">
        <div class="button" id="delete">
        Delete
        </div>
        <div class="button" id="Update">
          Update
        </div>
        <div class="button" id="insert">
          Insert
        </div>
        <div class="button" id="Search">
        Search
        </div>
        <div class="button" id="Show">
          Show
        </div>
  </div>
      </div>
  <div class="con">
      <div class="pik dele">
        <div class="submenu">
            <div class="small_button"   id="delete_engineers"> Delete Engineers </div>
            <div class="small_button"   id="delete_projects"> Delete Projects </div>
            <div class="small_button"   id="delete_software_Field"> Delete Software Field </div>
        </div>
        <div class="dele1 engi">
          <center><h4>Delete Engineers</h4><center>
            <form id="Delete_engineers_form" method="post" enctype="multipart/form-data">
              <p>
                <label for="id"> Enter ID: </label><br>
                <input type="text" name="id" id="id" ></br>
              </p>

                <button type="submit" class="small_button">Click Me!</button>
                 <button type="reset" class="small_button">Reset</button>
            </form>

        </div>
        <div class="dele1 proj">
          <center><h4>Delete Project</h4><center>
            <form id="Delete_project_form" method="post" enctype="multipart/form-data">
              <p>
                <label for="id_">Enter ID:</label><br>
                <input type="text" name="id_" id="id_"></br>
              </p>

            <button type="submit" class="small_button">Click Me!</button>
          <button type="reset" class="small_button">Reset</button>
          </from>
        </div>
        <div class="dele1 soft">
          <center><h4>Delete Software Field</h4><center>
              <form id="Delete_softwarefield_form" method="post" enctype="multipart/form-data">

            <p>
                <label for="id_Field">Enter ID:</label><br>
                <input type="text" name="id_Field" id="id_Field"></br>
            </p>

          <button type="submit" class="small_button">Click Me!</button>
           <button type="reset" class="small_button">Reset</button>
        </form>
        </div>
        <div id="result_delete"></div>
      </div>
      <div class="pik up">
        <div class="submenu">
          <div class="small_button" id="update_engineers">Update Engineers</div>
          <div class="small_button" id="update_projects">Update Projects</div>
          <div class="small_button" id="update_software_Field">Update Software Field</div>
        </div>
          <div class="upd enginn">
            <center><h4>Update Engineers</h4><center>
              <form id="Update_engin_form" method="post" enctype="multipart/form-data">
                <p>
                  <label for="id_up">Enter the ID you want to update :</label><br>
                  <input type="text" name="id_up" id="id_up"></br>
                </p>
              <p>
                <lable for="Phone_numberUp">Enter the new Phone:</lable><br>
                <input type="text" name="phone_numberUp" id="phone_numberUp"></br>
            </p>
            <p>
              <lable for="Address">Enter the address</lable><br>
              <lable for="Street_name">Enter the Street name:</lable><br>
              <input type="text" name="Street_name" id="Street_name"></br>
              <lable for="Street_number">Enter the Street number:</lable><br>
              <input type="text" name="Street_number" id="Street_number"></br>
              <lable for="City">Enter the City:</lable><br>
              <input type="text" name="city" id="city"></br>
              <lable for="State" >Enter the State:</lable><br>
              <input type="text" name="state" id="state"></br>
            </p>
            <button type="submit" class="small_button">Click Me!</button>
             <button type="reset" class="small_button">Reset</button>
          </form>

          </div>
          <div class="upd projec">
            <center><h4>Update Project</h4><center>
                <form id="update_projects_form" method="post" enctype="multipart/form-data">
                <p>
                  <label for="id_upro">Enter the Porject ID you want to update :</label><br>
                  <input type="number" name="id_upro" id="id_upro"></br>
                </p>
                <p>
                  <label for="Workspaceup">Enter the Workspace you want to update:</lable><br>
                  <input type="text" name="Workspace_up" id="Workspace_up"></br>
                </p>
                <p>
                  <label for="Description_up">Enter the Description you want to update:</lable><br>
                  <input type="text" name="Description_up" id="Description_up"></br>
                </p>
                <p>
                  <label for="Client_name_up">Enter the  Client_name you want to update:</lable><br>
                    <input type="text" name=" Client_name_up" id="  Client_name_up"></br><br>
                </p>
                <p>
                  <label for=upDate_of_project>Choose a date:</label><br>
                    <input type="date" name="upDate_of_project" id="upDate_of_project"></br>
                  </p>
                  <p>
                    <label for="Project_name_up">Enter the Project name you want to update:</lable><br>
                    <input type="text" name="Project_name_up" id="Project_name_up"></br>
                  </p>
                  <button type="sumbit" class="small_button">Click Me!</button>
                  <button type="reset" class="small_button">Reset</button>
                </form>
          </div>
          <div class="upd software_Fie">
            <center><h4>update  software Fiel</h4><center>
              <form id="update_SoftwareField_form" method="post" enctype="multipart/form-data">
              <p>
                  <label for="id_Field">Enter Field number:</label><br>
                  <input type="text" name="id_Field" id="id_Field"></br>
              </p>
              <p>
                <lable for="Field_name">Enter Field name:</lable><br>
                <input type="text" name="field_name" id="field_name"></br>
              </p>

            <p>
              <lable for="Expertise"> Enter Expertise:</lable><br>
              <input type="text" name="expertise" id="expertise"></br>
            </p>
            <button type="sumbit" class="small_button">Click Me!</button>
             <button type="reset" class="small_button">Reset</button>
          </form>
          </div>
          <div id="result_update"></div>
        </div>
      <div class="pik ins">
        <div class=submenu>
          <div class="small_button" id="insert_engineers">Insert Engineers</div>
          <div class="small_button" id="insert_projects"> Insert Projects</div>
          <div class="small_button" id="insert_software_Field">Insert Software Field</div>
          <div class="small_button" id="insert_Grade"> Insert Grade</div>
        </div>

            <div class="inser engin">
                <center><h4>Insert Engineers</h4><center>
                  <form id="insert_engineers_form" method="post" enctype="multipart/form-data">

                    <p>
                      <lable for="Phone_number">Enter Phone number:</label><br>
                        <input type="text" name="Phone_number" id="Phone_number"></br>
                  </p>
                  <p>
                    <lable for="Age"> Enter Age:</label><br>
                      <input type="text" name="Age" id="Age"></br>
                  </p>
                <p>
                  <label for="Field_number"> Enter Field Number</label><br>
                  <input type="text" name="Field_number" id="Field_number"></br>

                </p>
                <P>
                  <label for="Birth_date">Enter a date of birth</lable><br>
                  <input type="date" name="Birth_date" id="Birth_date"></br>

                  </p>
                  <P>
                    <label for="Name">Enter a Name :</lable><br>
                    <input type="date" name="Name" id="Name"></br>

                    </p>
                  <button type="sumbit" class="small_button">Click Me!</button>
                  <button type="reset" class="small_button">Reset</button>
                </form>
            </div>
            <div class="inser proje">
                <center><h4>Insert Projects</h4><center>
                  <form id="insert_Projects_form" method="post" enctype="multipart/form-data">

                    <p>
                      <lable for="workspace">Enter Workspace:</label><br>
                        <input type="text" name="workspace" id="workspace"></br>
                  </p>
                  <p>
                    <lable for="Description"> Enter Description:</label><br>
                      <input type="text" name="description" id="description"></br>
                  </p>
                <p>
                  <label for="Client name"> Enter Client Name:</label><br>
                    <input type="text" name="client_name" id="client_name"></br>
                </p>

                <p>
                  <lable for="projet name">Enter Project Name:</label><br>
                    <input type="text" name="Project_name" id="Project_name"></br>
                </p>
                <P>
                  <label for=Date_of_project>Enter a Date:</label><br>
                    <input type="date"name="Date_of_project" id="Date_of_project"></br>
              </p>
                  <button type="sumbit" class="small_button">Click Me!</button>
                    <button type="reset" class="small_button">Reset</button>
                </form>
            </div>
            <div class="inser software">

                <center><h4>Insret Software Field</h4><center>
                  <form id="insert_SoftWareField_form" method="post" enctype="multipart/form-data">

                  <p>
                    <lable for="Field_name">Enter Field name:</lable><br>
                    <input type="text" name="Field_Name" id="Field_Name"></br>
                  </p>

                <p>
                  <lable for="Expertise"> Enter Expertise:</lable><br>
                  <input type="text" name="expertise" id="expertise"></br>
                </p>
                <button type="sumbit" class="small_button">Click Me!</button>
                <button type="reset" class="small_button">Reset</button>
              </form>
            </div>

            <div class="inser Grade">
                <center><h4>Insert Grade</h4><center>
                <form id="insert_grade_form" method="post" enctype="multipart/form-data">
              <p>
                <lable for="Grade" >Enter Grade between 1 to 10 : </label><br>
                  <input type="number" name="Grade" id="Grade" required></br>
              </p>
              <p>
                <lable for="engineersID"> Enter Engineer ID  : </label><br>
                  <input type="number" name="EngineerID" id="EngineerID" required></br>
              </p>
              <p>
                <lable for="ProjectID" > Enter Project ID : </label><br>
                  <input type="number" name="ProjectID" id="ProjectID" required></br>
              </p>
              <button type="sumbit" class="small_button">Click Me!</button>
              <button type="reset" class="small_button">Reset</button>
            </form>
            </div>
            <div id="result_insret"></div>
      </div>

      <div class="pik sear">
        <div class=submenu>
          <div class="small_button"  id="search_engineers">Search Engineers</div>
          <div class="small_button" id="search_projects">Search Projects</div>
          <div class="small_button" id="search_software_Field">Search Software Field</div>
        </div>

        <div class="search enginn">
          <center><h4>Search Engineers</h4><center>
            <form id="search_engineers_form" method="post" enctype="multipart/form-data">
              <p>
                <label for="id_E">Enter ID:</label><br>
                <input type="text" name="id_E" id="id_E"></br>
              </p>
              <button type="sumbit" class="small_button">Click Me!</button>
              <button type="reset" class="small_button">Reset</button>
            </form>
        </div>
        <div class="search projec">
            <center><h4>Search Projects</h4><center>
            <form id="search_projects_form" method="post" enctype="multipart/form-data">
            <p>
              <label for="id_PrOject">Enter ID:</label><br>
              <input type="text" name="id_PrOject" id="id_PrOject"></br>
            </p>
            <button type="sumbit" class="small_button">Click Me!</button>
             <button type="reset" class="small_button">Reset</button>
          </form>
        </div>
        <div class="search softwf">
          <center><h4>Search Software Field</h4><center>
        <form id="search_softwareField_form" method="post" enctype="multipart/form-data">
          <p>
            <label for="id_Softer">Enter Field Number:</label><br>
            <input type="text" name="id_Softer" id="id_Softer"></br>
          </p>
          <button type="sumbit" class="small_button">Click Me!</button>
           <button type="reset" class="small_button">Reset</button>
        </form>
        </div>
        <div id="result_search"></div>
      </div>
      <div class="pik showTable">
        <div class="submenu">
            <div class="small_button"   id="show_engineers"> Show Engineers </div>
            <div class="small_button"   id="show_projects"> Show Projects </div>
            <div class="small_button"   id="show_software_Field"> Shows Software Field </div>
            <div class="small_button"   id="show_group_by_field_number"> Shows Group </div>
            <div class="small_button"   id="show_average">Show 3 Interesting Projects</div>
            <div class="small_button"   id="show_Development_stage">Show Development Stage</div>
            <div class="small_button"   id="show_busyengineers">Show Busy Engineers</div>
            <div class="small_button"   id="show_MileStoneAndMonth">show Mile Stone And Amount</div>

        </div>
        <div class="show Engi_">
          <form id="show_engineers_form" method="post" enctype="multipart/form-data">
              <center><button type="submit" class="small_button">Click Me!</button></center>
          </form>
        </div>

        <div class="show Proje_">
          <form id="show_projects_form" method="post" enctype="multipart/form-data">
            <center><button type="submit" class="small_button">Click Me!</button></center>
          </form>
      </div>

      <div class="show softwareField_">
        <form id="show_softwareField_form" method="post" enctype="multipart/form-data">
            <center><button type="submit" class="small_button">Click Me!</button></center>
        </form>
    </div>
    <div class="show Group_By_Field_Number ">
      <form id="show_Group_By_Field_Number_form" method="post" enctype="multipart/form-data">
              <center><label for="Id_Show">Enter ID:</label><br>
                <input type="text" name="Id_Show" id="Id_Show"></input></br>
                <button type="submit" class="small_button">Click Me!</button></center>
      </form>
  </div>
  <div class="show average"> TOP 3
    <form id="show_average_form" method="post" enctype="multipart/form-data">
      <center><button type="sumbit" class="small_button">Click Me!</button></center>
    </form>
      <div class="show average"> BOTTON 3
      <form id="show_average_min_form" method="post" enctype="multipart/form-data">
        <center><button type="sumbit" class="small_button">Click Me!</button></center>
      </form>
    </div>
  </div>
  <div class="show Development_stage">
    <form id="show_Development_stage_form" method="post" enctype="multipart/form-data">
      <center><select name="Development_tools">
          <option value="Configuration_Management">Configuration Management</option>
          <option value="Task_management">Task Management</option>
          <option value="designing_tools">Designing Tools</option>
          <option value="Requirements_management">Requirements Management</option>
          <option value="Encoding">Encoding</option>
          <option value="Unit_tests">Unit Tests</option>
          <option value="Software_testing">Software Testing</option>
      </select>
        <br><button type="sumbit" class="small_button">Click Me!</button></center></br>
    </form>
  </div>
  <div class="show busyengineers">
    <form id="show_busyengineers_form" method="post" enctype="multipart/form-data">
      <center><button type="sumbit" class="small_button">Click Me!</button></center>
    </form>
  </div>
  <div class="show mile_stone_and_amount">
    <form id="show_mile_stone_and_amount_form" method="post" enctype="multipart/form-data">
      <center><button type="sumbit" class="small_button">Click Me!</button></center>
    </form>
  </div>
    <div id="result_show"></div>
  </div>
    <div class="footer">
      <h3> &copy; Amit Shwartz and Yaron daya</h3>
    </div>
 </div>
</body>
</html>
