 

<template>
  
  <div>

 <div class="row">
  <router-link to="/pay-salary" class="btn btn-primary">Pay Salary </router-link>
   
 </div>
<br>
   <input v-if="salaries.length > 0" type="text" v-model="searchTerm" class="form-control" style="width: 300px;" placeholder="Search Here">

<h3 class="text-center" v-if="salaries.length == 0">no Salary added </h3>

<br>

   <div class="row" v-if="salaries.length > 0">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Salary Details</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Month Name</th>
                        <th>Datails</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="salary in filtersearch" :key="salary.id">
                        <td> {{ salary.salary_month }} </td>
                        
            <td>
   <router-link :to="{name: 'view-salary', params:{id:salary.salary_month}}" class="btn btn-sm btn-primary">View Salary</router-link> 
            </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->


   
  </div>


</template>



<script type="text/javascript">
  
  export default {
    created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
    },
    data(){
      return{
        salaries:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
      return this.salaries.filter(salary => {
         return salary.salary_month.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allSalary(){
      axios.get('/api/salary/')
      .then(({data}) => (this.salaries = data))
      .catch()
    },
    
  },
  created(){
    this.allSalary();
  } 
  

  } 
</script>


<style type="text/css">
  #em_photo{
    height: 40px;
    width: 40px;
  }
</style>