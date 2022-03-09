<template>

    <div>
         <div class="container">
             

                 
      <h1 style="text-align:center" class="display-4 font-weight-bold mt-2">STAR WARS</h1>

<div class="row mt-4">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                
                                <div class="col-lg-11 col-md-6 col-sm-12 p-0">
                                <multiselect  v-model="character" :options="ccoptions" label="name" @input="getFlims" 
                                    track-by="name"  :multiple="false" :close-on-select="true" :clear-on-select="false"  :allow-empty="true"
                                    :preserve-search="true" placeholder="Select Character" :preselect-first="false">
                                    
                                </multiselect>                               
                                 </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<h3 class="mt-2">List of Movies</h3>
<div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                
                                <div class="result-body">
                                    <div class="table-responsive">
                                        
                                        <table class="table widget-26 text-center">
                                            <tbody>
                                                <tr>

                                                  <td>
                                                     <b>Movie Name</b> 
                                                    </td>
                                                       <td>
                                                        <b>Director</b>   
                                                    </td>
                                                       <td>
                                                         <b>Producer</b>  
                                                    </td>
                                                       <td>
                                                        <b>Release Date</b>   
                                                    </td>


                                                </tr>
                                                <tr v-for="item in films">
                                                  
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                            <p>{{item.title}}</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                      
                                                                 <p>{{item.director}}</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                        
                                                                 <p>{{item.producer}}</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div class="widget-26-job-title">
                                                        
                                                                 <p>{{item.release_date}}</p>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                                  <tr v-if="films <= 0" >
                                                    <th colspan="5" class="text-center h5 alert alert-danger">
                                                        Oops no data found
                                                     </th>
                                                  </tr>
                                               
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <h3>Name / Year last Movie</h3>
<div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                
                                <div class="result-body">
                                    <div class="table-responsive">
                                        <table class="table widget-26 text-center">
                                               <tbody>
                                                <tr>
                                                  <td>
                                                     <b>Movie Name</b> 
                                                    </td>
                                                       <td>
                                                        <b>Year</b>   
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                  
                                                    <td>
                                                        <div class="widget-26-job-title">
                                                        
                                                                 <p>{{this.lastmovie}}</p>
                                                        </div>
                                                    </td>
                                                     <td>
                                                        <div class="widget-26-job-title">
                                                     
                                                                 <p>{{this.lastyear |  moment('YYYY')}}</p>
                                                        </div>
                                                    </td>
                                                 
                                                   
                                                </tr>
                                                  <tr v-if="lastyear == null && lastmovie == null" >
                                                    <th colspan="2" class="text-center h5 alert alert-danger">
                                                        Oops no data found
                                                     </th>
                                                  </tr>
                                               
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
        
           
    </div>
</template>

<script>

    export default {
      
        data() {
            return {
               
                character:[],
                ccoptions:[],
                  films:[],
                  loading:1,
                  lastyear:null,
                  lastmovie:null
             
            }

        },

       async mounted() {
           
      
             const string0 = `https://swapi.dev/api/people`;       
                
            const response0 = await axios.get(string0); 

            this.ccoptions = response0.data.results;

               
    
        },
        methods :{


           async getFlims()
            
            {
                  const string0 = `https://swapi.dev/api/people`;       
                
            const response0 = await axios.get(string0); 

               for(var i= 0; i <= response0.data.results.length; i++)
               {
                    if(this.character.name === response0.data.results[i].name)
                    {

                        for(var j = 0 ; j < response0.data.results[i].films.length; j++)
                    {
                            const string01 = response0.data.results[i].films[j];  
                            const response01 = await axios.get(string01); 

                            if(j === response0.data.results[i].films.length - 1)
                            {
                                
                                this.lastyear = response01.data.release_date;

                                this.lastmovie = response01.data.title;
                         
                                

                            }

                      
                    
                           this.films.push(response01.data);
                           this.loading = 1;
                    }
                     

                    }

            
                }

         

            }


        }
    }
</script>