<div class="faq-item">
    <div id="legalRoles" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Legal Entity Roles</span>

        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>



    </div>

    <div class="faq-answer" style="display: none;">
        <div>
            <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
            @php
                $legalID = 0;
            @endphp
       @foreach ($projOrg->projects as $project)
       @foreach ($project->legalentityroles as $role)
       @if ($role->id == $legalID)
           
       @else
            <div style="margin-top: 15px;">
            <section class="encapsulated-text py-3">
                <a href="{{ route('legalEntityClickingPage', ['id' => $role->id]) }}" style="color:black;font-weight:bold;">{{$role->name}}</a>
            </section>
        </div>
        <div class="divider-within-class"></div>
        @php
            $legalID = $role->id;
        @endphp
        @endif
        @endforeach
        @endforeach
    </div>



    

            <center>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>

            </center>


        </div>
    </div>

<div class="divider"></div>
