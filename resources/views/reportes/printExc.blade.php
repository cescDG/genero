<table>
            <thead>
                <tr>
                    <th>campo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sumaA as $item)
                        <tr>
                            <td>{{mb_strtoupper($item)}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>