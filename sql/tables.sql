/* database structure - struktura tabel */

--
-- Struktura tabele za  `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `playlist_party`
--

CREATE TABLE `playlist_party` (
  `id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `votes_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `playlist_track`
--

CREATE TABLE `playlist_track` (
  `id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `remote`
--

CREATE TABLE `remote` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `track_id` int(11) DEFAULT NULL,
  `position` double DEFAULT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `identifier` text CHARACTER SET utf8 NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `path` text CHARACTER SET utf8mb4 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `track_number` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `cover` text CHARACTER SET utf8,
  `length` bigint(20) DEFAULT NULL,
  `genre` text CHARACTER SET utf8 NOT NULL,
  `inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele za  `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksiranje izvoženih tabel
--

--
-- Indeksi za tabelo `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indeksi za tabelo `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi za tabelo `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi za tabelo `playlist_party`
--
ALTER TABLE `playlist_party`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi za tabelo `playlist_track`
--
ALTER TABLE `playlist_track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlist_id` (`playlist_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indeksi za tabelo `remote`
--
ALTER TABLE `remote`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi za tabelo `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi za tabelo `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `artist_id_2` (`artist_id`);

--
-- Indeksi za tabelo `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`),
  ADD KEY `track_id` (`track_id`);

--
-- AUTO_INCREMENT za izvožene tabele
--

--
-- AUTO_INCREMENT za Tabele `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT za Tabele `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT za Tabele `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT za Tabele `playlist_party`
--
ALTER TABLE `playlist_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT za Tabele `playlist_track`
--
ALTER TABLE `playlist_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT za Tabele `remote`
--
ALTER TABLE `remote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT za Tabele `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT za Tabele `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT za Tabele `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Omejitve izvoženih tabel
--

--
-- Omejitve tabele `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_album_to_artist` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Omejitve tabele `playlist_track`
--
ALTER TABLE `playlist_track`
  ADD CONSTRAINT `fk_playlist` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_playlist_track` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`);

--
-- Omejitve tabele `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_artist` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Omejitve tabele `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `fk_download_track` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


INSERT INTO `setting` (`id`, `identifier`, `value`) VALUES
(1, 'password_user', ''),
(2, 'password_remoteplayer', ''),
(3, 'password_voter', '');
