<table class="table table-striped my-0">

        <tr>
            <th>Seksyen</th>
            <th>Soalan</th>
            <th>Jawapan</th>
        </tr>


    @foreach ($Faq as $Faq)
        <tr>
               <td>{{$Faq->faq_section}}</td>
               <td>{{$Faq->faq_question}}</td>
               <td>{{$Faq->faq_answer}}</td>
        </tr>
    @endforeach
</table>

djdjjd