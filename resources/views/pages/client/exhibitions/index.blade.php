<x-layouts.app>
    <x-slot name="header">
        <title>Exhibitions</title>
    </x-slot>

    <div class="container">
        <x-client.common.title.left-title title="Exhibitions" />

        <x-client.exhibitions.exhibition-card />
        <x-client.exhibitions.exhibition-card />
        <x-client.exhibitions.exhibition-card />
        
        <nav class="mt-2">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>
    </div>

</x-layouts.app>