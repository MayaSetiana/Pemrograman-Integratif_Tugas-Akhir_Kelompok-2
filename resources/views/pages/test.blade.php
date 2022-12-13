@forelse ($data->jne as $b)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        {{-- <td>{{$b->nama}}</td> --}}
                                        <td>JNE</td>
                                        <td>{{$b->description}}</td>
                                        <td>{{$b->biaya}}</td>
                                        <td>{{$b->etd}}</td>
                                    </tr>
                                    @empty
                                    <td colspan="6" class="text-center">Belum Ada Data Untuk JNE</td>
                                    @endforelse
                                    
                                    @forelse ($data->pos as $b)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        {{-- <td>{{$b->nama}}</td> --}}
                                        <td>POS</td>
                                        <td>{{$b->description}}</td>
                                        <td>{{$b->biaya}}</td>
                                        <td>{{$b->etd}}</td>
                                    </tr>
                                    @empty
                                    <td colspan="6" class="text-center">Belum Ada Data Untuk POS</td>
                                    @endforelse
                                    
                                    @forelse ($data->tiki as $b)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        {{-- <td>{{$b->nama}}</td> --}}
                                        <td>TIKI</td>
                                        <td>{{$b->description}}</td>
                                        <td>{{$b->biaya}}</td>
                                        <td>{{$b->etd}}</td>
                                    </tr>
                                    @empty
                                    <td colspan="6" class="text-center">Belum Ada Data Untuk TIKI</td>''
                                    @endforelse