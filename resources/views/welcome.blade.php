

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Star Wars</title>

        <link rel="icon" href="{{ asset('img/space.jpg') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


       <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
       {{--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

        <!-- Styles -->
      
    </head>
    <body >
        <div id="app">
            <sample></sample>
        </div>
   
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>


<style scoped>
    body{
       background: beige;
      
        margin-top:20px;
    }
    
    .widget-26 {
      color: #3c4142;
      font-weight: 400;
    }
    
    .search-body[data-v-1c75c2a8] {
      margin-bottom: 0.5rem;
    }
    .widget-26 tr:first-child td {
      border: 0;
    }
    
    .widget-26 .widget-26-job-emp-img img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }
    
    .widget-26 .widget-26-job-title {
      min-width: 200px;
    }
    
    .widget-26 .widget-26-job-title a {
      font-weight: 400;
      font-size: 0.875rem;
      color: #3c4142;
      line-height: 1.5;
    }
    
    .widget-26 .widget-26-job-title a:hover {
      color: #68CBD7;
      text-decoration: none;
    }
    
    .widget-26 .widget-26-job-title .employer-name {
      margin: 0;
      line-height: 1.5;
      font-weight: 400;
      color: #3c4142;
      font-size: 0.8125rem;
      color: #3c4142;
    }
    
    .widget-26 .widget-26-job-title .employer-name:hover {
      color: #68CBD7;
      text-decoration: none;
    }
    
    .widget-26 .widget-26-job-title .time {
      font-size: 12px;
      font-weight: 400;
    }
    
    .widget-26 .widget-26-job-info {
      min-width: 100px;
      font-weight: 400;
    }
    
    .widget-26 .widget-26-job-info p {
      line-height: 1.5;
      color: #3c4142;
      font-size: 0.8125rem;
    }
    
    .widget-26 .widget-26-job-info .location {
      color: #3c4142;
    }
    
    .widget-26 .widget-26-job-salary {
      min-width: 70px;
      font-weight: 400;
      color: #3c4142;
      font-size: 0.8125rem;
    }
    
    .widget-26 .widget-26-job-category {
      padding: .5rem;
      display: inline-flex;
      white-space: nowrap;
      border-radius: 15px;
    }
    
    .widget-26 .widget-26-job-category .indicator {
      width: 13px;
      height: 13px;
      margin-right: .5rem;
      float: left;
      border-radius: 50%;
    }
    
    .widget-26 .widget-26-job-category span {
      font-size: 0.8125rem;
      color: #3c4142;
      font-weight: 600;
    }
    
    .widget-26 .widget-26-job-starred svg {
      width: 20px;
      height: 20px;
      color: #fd8b2c;
    }
    
    .widget-26 .widget-26-job-starred svg.starred {
      fill: #fd8b2c;
    }
    .bg-soft-base {
      background-color: #e1f5f7;
    }
    .bg-soft-warning {
        background-color: #fff4e1;
    }
    .bg-soft-success {
        background-color: #d1f6f2;
    }
    .bg-soft-danger {
        background-color: #fedce0;
    }
    .bg-soft-info {
        background-color: #d7efff;
    }
    
    
    .search-form {
      width: 80%;
      margin: 0 auto;
      margin-top: 1rem;
    }
    
    .search-form input {
      height: 100%;
      background: transparent;
      border: 0;
      display: block;
      width: 100%;
      padding: 1rem;
      height: 100%;
      font-size: 1rem;
    }
    
    .search-form select {
      background: transparent;
      border: 0;
      padding: 1rem;
      height: 100%;
      font-size: 1rem;
    }
    
    .search-form select:focus {
      border: 0;
    }
    
    .search-form button {
      height: 100%;
      width: 100%;
      font-size: 1rem;
    }
    
    .search-form button svg {
      width: 24px;
      height: 24px;
    }
    
    .search-body {
      margin-bottom: 1.5rem;
    }
    
    .search-body .search-filters .filter-list {
      margin-bottom: 1.3rem;
    }
    
    .search-body .search-filters .filter-list .title {
      color: #3c4142;
      margin-bottom: 1rem;
    }
    
    .search-body .search-filters .filter-list .filter-text {
      color: #727686;
    }
    
    .search-body .search-result .result-header {
      margin-bottom: 2rem;
    }
    
    .search-body .search-result .result-header .records {
      color: #3c4142;
    }
    
    .search-body .search-result .result-header .result-actions {
      text-align: right;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    
    .search-body .search-result .result-header .result-actions .result-sorting {
      display: flex;
      align-items: center;
    }
    
    .search-body .search-result .result-header .result-actions .result-sorting span {
      flex-shrink: 0;
      font-size: 0.8125rem;
    }
    
    .search-body .search-result .result-header .result-actions .result-sorting select {
      color: #68CBD7;
    }
    
    .search-body .search-result .result-header .result-actions .result-sorting select option {
      color: #3c4142;
    }
    
    @media (min-width: 768px) and (max-width: 991.98px) {
      .search-body .search-filters {
        display: flex;
      }
      .search-body .search-filters .filter-list {
        margin-right: 1rem;
      }
    }
    
    .card-margin {
        margin-bottom: 1.875rem;
    }
    
    @media (min-width: 992px){
    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    }
    
    .card-margin {
        margin-bottom: 1.875rem;
    }
    .card {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid #e6e4e9;
        border-radius: 8px;
    }
    
    
    
    
    </style>
    