--Agendados / em direto
select
j.tipo_jogo,
j.duracao,
concat(el.nome,' vs. ',ev.nome) as `equipas`,
concat(cast(j.golos_equipa_local as VARCHAR(3)),'-',cast(j.golos_equipa_visitante as VARCHAR(3))) as `resultado`,
concat(cast(j.n_cartoes_amarelos_local as VARCHAR(3)),'-',cast(j.n_cartoes_amarelos_visitante as VARCHAR(3))) as `amarelos`,
concat(cast(j.n_cartoes_vermelhos_local as VARCHAR(3)),'-',cast(j.n_cartoes_vermelhos_visitante as VARCHAR(3))) as `vermelhos`,
case
	when j.data <= CURDATE() then 'A decorrer'
    else 'Agendado'
end as 'estado'
from Jogo j
left join Equipa el on j.id_local=el.id_equipa
left join Equipa ev on j.id_visitante=ev.id_equipa
where j.terminado=0
order by j.data asc

--terminado
select j.tipo_jogo, j.duracao, concat(el.nome,' vs. ',ev.nome) as `equipas`,
concat(cast(j.golos_equipa_local as VARCHAR(3)),'-',cast(j.golos_equipa_visitante as VARCHAR(3))) as `resultado`,
concat(cast(j.n_cartoes_amarelos_local as VARCHAR(3)),'-',cast(j.n_cartoes_amarelos_visitante as VARCHAR(3))) as `amarelos`,
concat(cast(j.n_cartoes_vermelhos_local as VARCHAR(3)),'-',cast(j.n_cartoes_vermelhos_visitante as VARCHAR(3))) as `vermelhos`
from Jogo j
left join Equipa el on j.id_local=el.id_equipa
left join Equipa ev on j.id_visitante=ev.id_equipa
where j.terminado=1
order by j.data desc


--treinos
select t.data, t.local, t.duracao, e.nome, case when t.data <= CURDATE() then 'A decorrer' else 'Agendado' end as 'estado' from Treino t left join Equipa e on t.id_equipa=e.id_equipa where t.terminado=0 order by t.data asc
select t.data, t.local, t.duracao, e.nome from Treino t left join Equipa e on t.id_equipa=e.id_equipa where t.terminado=1 order by t.data desc
