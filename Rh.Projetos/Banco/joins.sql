-- joins

alter table vagas
	add cargo_pretendido int;
    
alter table tecnologias
	add cargo_pretendido int;

alter table cargo
	add foreign key (id_vagas)
		references vagas(id);

alter table cargo
	add foreign key (id_tecnologias)
		references tecnologias(id);

select t.descricao from cargo as c join vagas as v
		on c.id_vagas = v.id
			join tecnologias as t
				on c.id_tecnologias = t.id
		where c.id_vagas = 1;
