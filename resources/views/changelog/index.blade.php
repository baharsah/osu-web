{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master', ['legacyNav' => false, 'bodyAdditionalClasses' => 'osu-layout--body-111-plain'])

@section('content')
    <div class="js-react--changelog-index osu-layout osu-layout--full"></div>

    <script id="json-builds" type="application/json">
        {!! json_encode($builds) !!}
    </script>

    <script id="json-update-streams" type="application/json">
        {!! json_encode($updateStreams) !!}
    </script>

    <script id="json-chart-config" type="application/json">
        {!! json_encode($chartConfig) !!}
    </script>

    @include('layout._extra_js', ['src' => 'js/react/changelog-index.js'])
@endsection
